<?php
// 4.8 Limit data selections from a MySQL database

$host = "localhost";
$user = "root";
$password = "";
$database = "college_db";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$limit = 5;

$stmt = $conn->prepare(
    "SELECT id, name, email, course FROM students ORDER BY id LIMIT ?"
);
$stmt->bind_param("i", $limit);
$stmt->execute();

$result = $stmt->get_result();

echo "<h2>First $limit Student Records</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["course"]) . "</td>";
    echo "</tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
?>