<?php
// 2.3 Demonstration of array functions

$var = array(
    "Name" => "Riya",
    "CITY" => "Rajkot",
    "Course" => "BCA"
);

echo "<h3>1. array_change_key_case()</h3>";
print_r(array_change_key_case($var, CASE_LOWER));
echo "<br>";
print_r(array_change_key_case($var, CASE_UPPER));

echo "<h3>2. array_chunk() - Months</h3>";
$months = array("January", "February", "March", "April", "May", "June");
print_r(array_chunk($months, 2));

echo "<h3>3. array_count_values()</h3>";
$colors = array("Red", "Blue", "Red", "Green", "Blue", "Red");
print_r(array_count_values($colors));

echo "<h3>4. array_pop()</h3>";
$numbers = array(10, 20, 30, 40);
$removed = array_pop($numbers);
echo "Removed: $removed<br>";
print_r($numbers);

echo "<h3>5. array_push()</h3>";
array_push($numbers, 50, 60);
print_r($numbers);

echo "<h3>6. array_unshift()</h3>";
array_unshift($numbers, 5);
print_r($numbers);

echo "<h3>7. array_shift()</h3>";
$first = array_shift($numbers);
echo "Removed first value: $first<br>";
print_r($numbers);
?>
