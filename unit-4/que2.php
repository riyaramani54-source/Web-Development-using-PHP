<?php
// 4.2 Create a MySQL table using MySQLi and PDO

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";

// MySQLi
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("MySQLi connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    course VARCHAR(100) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created using MySQLi.<br>";
} else {
    echo "MySQLi error: " . $conn->error . "<br>";
}
$conn->close();

// PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec($sql);
    echo "Table created/verified using PDO.";
} catch (PDOException $e) {
    echo "PDO error: " . $e->getMessage();
}
?>