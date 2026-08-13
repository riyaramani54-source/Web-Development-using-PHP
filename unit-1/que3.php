<?php
// 1.3 Operators in PHP

$a = 10;
$b = 5;

echo "a = $a, b = $b<br><br>";

echo "Arithmetic Operators:<br>";
echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br><br>";

echo "Comparison Operators:<br>";
echo "a == b: " . (($a == $b) ? "true" : "false") . "<br>";
echo "a != b: " . (($a != $b) ? "true" : "false") . "<br>";
echo "a > b: " . (($a > $b) ? "true" : "false") . "<br>";
echo "a < b: " . (($a < $b) ? "true" : "false") . "<br><br>";

echo "Logical Operators:<br>";
echo "(a > 5 && b < 10): " . (($a > 5 && $b < 10) ? "true" : "false") . "<br>";
echo "(a > 20 || b < 10): " . (($a > 20 || $b < 10) ? "true" : "false");
?>
