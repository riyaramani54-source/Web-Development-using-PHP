<?php
// 4.7 Update data using MySQLi and PDO
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

$name = "Riya Updated";
$email = "riya.updated@example.com";
$course = "BCA";

$stmt = $conn->prepare(
    "UPDATE students SET name = ?, email = ?, course = ? WHERE id = ?"
);
$stmt->bind_param("sssi", $name, $email, $course, $id);

if ($stmt->execute()) {
    echo "MySQLi: Update operation completed.<br>";
} else {
    echo "MySQLi error: " . $stmt->error . "<br>";
}
$stmt->close();
$conn->close();

// PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare(
        "UPDATE students SET name = :name, email = :email, course = :course
         WHERE id = :id"
    );
    $stmt->execute([
        ":name" => "Riya Updated",
        ":email" => "riya.updated@example.com",
        ":course" => "BCA",
        ":id" => $id
    ]);

    echo "PDO: Update operation completed.";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage();
}
?>