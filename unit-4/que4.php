<?php
// 4.4 Demonstrate PHP MySQL Prepared Statements using MySQLi

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "Neha";
$email = "neha@example.com";
$course = "BCA";

// Prepared statement protects input from SQL injection.
$stmt = $conn->prepare(
    "INSERT INTO students (name, email, course) VALUES (?, ?, ?)"
);
$stmt->bind_param("sss", $name, $email, $course);

if ($stmt->execute()) {
    echo "Prepared statement executed successfully.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>