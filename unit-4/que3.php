<?php
// 4.3 Insert data using MySQLi and PDO

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";

// MySQLi
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("MySQLi connection failed: " . $conn->connect_error);
}

$name = "Riya";
$email = "riya@example.com";
$course = "BCA";

$sql = "INSERT INTO students (name, email, course) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $course);

if ($stmt->execute()) {
    echo "Data inserted using MySQLi.<br>";
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
        "INSERT INTO students (name, email, course) VALUES (:name, :email, :course)"
    );
    $stmt->execute([
        ":name" => "Aarav",
        ":email" => "aarav@example.com",
        ":course" => "BCA"
    ]);

    echo "Data inserted using PDO.";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage();
}
?>