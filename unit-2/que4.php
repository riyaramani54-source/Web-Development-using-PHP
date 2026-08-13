<?php
// 2.4 Demonstration of string functions

$string = "PHP is a powerful programming language.";
$word = "powerful";

echo "String: $string<br><br>";

echo "8. strlen(): " . strlen($string) . "<br>";
echo "9. strpos(): Position of '$word' = " . strpos($string, $word) . "<br>";
echo "10. str_word_count(): " . str_word_count($string) . "<br>";
echo "11. strrev(): " . strrev($string) . "<br>";
echo "12. strtolower(): " . strtolower($string) . "<br>";
echo "13. strtoupper(): " . strtoupper($string) . "<br>";
?>
