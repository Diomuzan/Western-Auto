<?php
$server = "localhost";
$db = "trucks";
$username = "root";
$password = "";
$conn = "";

$conn = "mysql:host=$server;dbname=$db;";
$st = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = new PDO("mysql:host=$server;dbname=$db", $username);
$dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $pdo = new PDO($conn, $username, $password);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
