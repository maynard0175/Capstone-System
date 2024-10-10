<?php
// Define database connection parameters
$host = 'localhost'; // Change to your database host
$db   = 'app_db'; // Change to your database name
$user = 'root'; // Change to your database username
$pass = ''; // Change to your database password
$charset = 'utf8mb4'; // Character set

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];




try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // echo "Connection successful!";
} catch (\PDOException $e) {
    // Handle connection errors
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
