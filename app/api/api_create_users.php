<?php
session_start();
header('Content-Type: application/json');

require '../connection.php';


$data = json_decode(file_get_contents('php://input'), true);


if (isset($data['first_name'], $data['last_name'], $data['email'], $data['role'], $data['password'], $data['retype_password'], $data['privacy'])) {


    if ($data['password'] !== $data['retype_password']) {
        echo json_encode(['error' => 'Passwords do not match']);
        http_response_code(400);
        exit();
    }

    try {

        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM tbl_users WHERE email = :email");
        $checkStmt->bindParam(':email', $data['email']);
        $checkStmt->execute();
        $emailExists = $checkStmt->fetchColumn();

        if ($emailExists > 0) {
            echo json_encode(['error' => 'Email already exists']);
            http_response_code(400); 
            exit();
        }

   
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);


        $stmt = $pdo->prepare("
            INSERT INTO tbl_users (first_name, last_name, email, role, password, is_privacy_agree)
            VALUES (:first_name, :last_name, :email, :role, :password, :is_privacy_agree)
        ");


        $stmt->bindParam(':first_name', $data['first_name']);
        $stmt->bindParam(':last_name', $data['last_name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':role', $data['role']);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':is_privacy_agree', $data['privacy']);


        $stmt->execute();


        echo json_encode([
            'message' => 'Registration successful!',
            'data' => $data
        ]);
        http_response_code(200);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
        http_response_code(500);
    }
} else {
    echo json_encode(['error' => 'Missing required fields']);
    http_response_code(400);
}
