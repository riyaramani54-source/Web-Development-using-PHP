<?php
$str1 = "    Riyaa   ";
$str2 = "Ramani";

echo "echo" . " " . $str1 . " " . $str2;
echo "<br>";
print("print" . " " .$str1 . " " . $str2)
echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str1);
echo "<br>";

echo "Before trim ";
echo strlen($str1 . $str2);
echo "<br>";
$timmedstring = rtrim($str1);

echo "After trim ";
echo strlen($timmedstring . $str2);
?>