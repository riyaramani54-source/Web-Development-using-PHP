<?php
// 2.1 Numeric, Associative and Multidimensional Arrays

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array - Days</h3>";
foreach ($days as $day) {
    echo $day . "<br>";
}

$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Associative Array - Months</h3>";
foreach ($months as $month => $daysInMonth) {
    echo $month . " => " . $daysInMonth . " days<br>";
}

$laptops = array(
    "Dell" => array(
        array("model" => "Inspiron 15", "price" => 55000),
        array("model" => "Vostro 14", "price" => 62000)
    ),
    "HP" => array(
        array("model" => "HP 15s", "price" => 50000),
        array("model" => "Pavilion 14", "price" => 65000)
    )
);

echo "<h3>Multidimensional Array - Laptops</h3>";
foreach ($laptops as $company => $models) {
    echo "<b>Company: $company</b><br>";
    foreach ($models as $laptop) {
        echo "Model: " . $laptop["model"] . " | Price: ₹" . $laptop["price"] . "<br>";
    }
    echo "<br>";
}
?>
