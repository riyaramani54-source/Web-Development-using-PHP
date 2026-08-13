<?php
// 1.6 Print 15 to 20 using While and Do While

echo "<h3>Using While Loop:</h3>";

$i = 15;
while ($i <= 20) {
    echo $i . " ";
    $i++;
}

echo "<h3>Using Do While Loop:</h3>";

$i = 15;
do {
    echo $i . " ";
    $i++;
} while ($i <= 20);
?>
