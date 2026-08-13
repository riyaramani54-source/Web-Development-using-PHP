<?php
// 2.9 MySQL Date and Time Functions

$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    HOUR('14:35:42') AS hour_value,
    MINUTE('14:35:42') AS minute_value,
    SECOND('14:35:42') AS second_value,
    DATE_FORMAT('2026-08-11 14:35:42', '%d-%m-%Y %H:%i:%s') AS formatted_date,
    DATE_SUB('2026-08-11', INTERVAL 7 DAY) AS date_subtracted";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo "<h3>MySQL Date and Time Functions</h3>";
    echo "24. HOUR(): " . $row["hour_value"] . "<br>";
    echo "25. MINUTE(): " . $row["minute_value"] . "<br>";
    echo "26. SECOND(): " . $row["second_value"] . "<br>";
    echo "27. DATE_FORMAT(): " . $row["formatted_date"] . "<br>";
    echo "28. DATE_SUB(): " . $row["date_subtracted"] . "<br>";
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
