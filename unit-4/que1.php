<?php
// 4.1 Establish Database Connection using MySQLi
$host = "localhost";
$user = "root";
$password = "";
$database = "student_result";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Database connected successfully!";
?>
