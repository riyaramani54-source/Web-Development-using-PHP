<?php
// 4.6 Delete data using MySQLi and PDO
// Change this ID to an existing student ID before running.

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";
$id = 1;

// MySQLi
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("MySQLi connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "MySQLi: Delete operation completed.<br>";
} else {
    echo "MySQLi error: " . $stmt->error . "<br>";
}
$stmt->close();
$conn->close();

// PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("DELETE FROM students WHERE id = :id");
    $stmt->execute([":id" => $id]);

    echo "PDO: Delete operation completed.";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage();
}
?>