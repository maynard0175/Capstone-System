<?php
session_start();
header('Content-Type: application/json');

require '../connection.php';


$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['email'], $data['password'])) {
    $checkStmt = $pdo->prepare("SELECT * FROM tbl_users WHERE email = :email");
    $checkStmt->bindParam(':email', $data['email']);
    $checkStmt->execute();
    $user = $checkStmt->fetch();

    if ($user) {
        if (password_verify($data['password'], $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            echo json_encode(['message' => 'Login successful!', 'user_type' => $user['role']]);
            http_response_code(200);
        } else {
            echo json_encode(['error' => 'Invalid email or password']);
            http_response_code(400);
        }
    } else {
        echo json_encode(['error' => 'Invalid email or password']);
        http_response_code(400);
    }

}
