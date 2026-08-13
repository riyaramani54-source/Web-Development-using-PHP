<?php
// 1.4 Print current month using if-else and switch case

$monthNumber = date("n");

echo "<h3>Using if-else:</h3>";

if ($monthNumber == 1) {
    echo "January";
} elseif ($monthNumber == 2) {
    echo "February";
} elseif ($monthNumber == 3) {
    echo "March";
} elseif ($monthNumber == 4) {
    echo "April";
} elseif ($monthNumber == 5) {
    echo "May";
} elseif ($monthNumber == 6) {
    echo "June";
} elseif ($monthNumber == 7) {
    echo "July";
} elseif ($monthNumber == 8) {
    echo "August";
} elseif ($monthNumber == 9) {
    echo "September";
} elseif ($monthNumber == 10) {
    echo "October";
} elseif ($monthNumber == 11) {
    echo "November";
} else {
    echo "December";
}

echo "<h3>Using switch case:</h3>";

switch ($monthNumber) {
    case 1: echo "January"; break;
    case 2: echo "February"; break;
    case 3: echo "March"; break;
    case 4: echo "April"; break;
    case 5: echo "May"; break;
    case 6: echo "June"; break;
    case 7: echo "July"; break;
    case 8: echo "August"; break;
    case 9: echo "September"; break;
    case 10: echo "October"; break;
    case 11: echo "November"; break;
    case 12: echo "December"; break;
}
?>
