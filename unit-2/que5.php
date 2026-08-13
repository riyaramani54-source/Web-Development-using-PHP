<?php
// 2.5 Type casting using settype() and gettype()

$value = "100";

echo "Original Value: $value<br>";
echo "Original Type: " . gettype($value) . "<br><br>";

settype($value, "integer");

echo "After settype(value, 'integer'):<br>";
echo "Value: $value<br>";
echo "Type: " . gettype($value) . "<br><br>";

settype($value, "double");

echo "After settype(value, 'double'):<br>";
echo "Value: $value<br>";
echo "Type: " . gettype($value) . "<br>";
?>
