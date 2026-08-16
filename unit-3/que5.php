<?php
// 3.5 Create a Session

session_start();

$_SESSION["username"] = "Riya";
$_SESSION["course"] = "BCA";

echo "Session created successfully.<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"];
?>
