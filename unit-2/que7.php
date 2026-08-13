<?php
// 2.7 MySQL String Manipulation Functions
// Requires MySQL connection. Change credentials if required.

$conn = new mysqli("localhost", "root", "", "");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT
    LENGTH('Hello PHP') AS string_length,
    CONCAT('Hello', ' ', 'PHP') AS concatenated,
    CONCAT_WS('-', '2026', '08', '11') AS concat_with_separator,
    TRIM('  Hello PHP  ') AS trimmed,
    RTRIM('Hello PHP   ') AS right_trimmed,
    LTRIM('   Hello PHP') AS left_trimmed,
    LPAD('123', 6, '0') AS left_padded,
    RPAD('123', 6, '0') AS right_padded,
    LOCATE('PHP', 'I love PHP') AS position";

$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo "<h3>MySQL String Functions</h3>";
    echo "14. LENGTH(): " . $row["string_length"] . "<br>";
    echo "15. CONCAT(): " . $row["concatenated"] . "<br>";
    echo "16. CONCAT_WS(): " . $row["concat_with_separator"] . "<br>";
    echo "17. TRIM(): [" . $row["trimmed"] . "]<br>";
    echo "17. RTRIM(): [" . $row["right_trimmed"] . "]<br>";
    echo "17. LTRIM(): [" . $row["left_trimmed"] . "]<br>";
    echo "18. LPAD(): " . $row["left_padded"] . "<br>";
    echo "18. RPAD(): " . $row["right_padded"] . "<br>";
    echo "18. LOCATE(): " . $row["position"] . "<br>";
} else {
    echo "Query failed: " . $conn->error;
}

$conn->close();
?>
