<?php
// 2.8 MySQL Date and Time Functions

$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    DAYOFWEEK('2026-08-11') AS day_of_week,
    WEEKDAY('2026-08-11') AS weekday,
    DAYOFMONTH('2026-08-11') AS day_of_month,
    DAYOFYEAR('2026-08-11') AS day_of_year,
    DAYNAME('2026-08-11') AS day_name";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo "<h3>MySQL Date Functions</h3>";
    echo "19. DAYOFWEEK(): " . $row["day_of_week"] . "<br>";
    echo "20. WEEKDAY(): " . $row["weekday"] . "<br>";
    echo "21. DAYOFMONTH(): " . $row["day_of_month"] . "<br>";
    echo "22. DAYOFYEAR(): " . $row["day_of_year"] . "<br>";
    echo "23. DAYNAME(): " . $row["day_name"] . "<br>";
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
