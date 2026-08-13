<?php
// 2.10 MySQL Current Date and Time Functions

$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    CURDATE() AS current_date_1,
    CURRENT_DATE() AS current_date_2,
    CURTIME() AS current_time_1,
    CURRENT_TIME() AS current_time_2,
    UNIX_TIMESTAMP() AS unix_timestamp_value,
    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS from_unix_time";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo "<h3>MySQL Current Date and Time Functions</h3>";
    echo "29. CURDATE(): " . $row["current_date_1"] . "<br>";
    echo "29. CURRENT_DATE(): " . $row["current_date_2"] . "<br>";
    echo "30. CURTIME(): " . $row["current_time_1"] . "<br>";
    echo "30. CURRENT_TIME(): " . $row["current_time_2"] . "<br>";
    echo "31. UNIX_TIMESTAMP(): " . $row["unix_timestamp_value"] . "<br>";
    echo "32. FROM_UNIXTIME(): " . $row["from_unix_time"] . "<br>";
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
