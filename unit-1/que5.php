<?php
// 1.5 Print 5 to 10 using For and Foreach

echo "<h3>Using For Loop:</h3>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<h3>Using Foreach Loop:</h3>";

$numbers = range(5, 10);

foreach ($numbers as $number) {
    echo $number . " ";
}
?>
