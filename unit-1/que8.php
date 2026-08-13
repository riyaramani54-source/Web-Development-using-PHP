<?php
// 1.8 Print values of array entered by user

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];
    $array = array_map("trim", explode(",", $input));

    echo "<h3>Array Values:</h3>";
    foreach ($array as $value) {
        echo htmlspecialchars($value) . "<br>";
    }
}
?>

<form method="post">
    Enter array values separated by commas:<br>
    <input type="text" name="numbers" placeholder="10,20,30,40,50" required>
    <button type="submit">Print Array</button>
</form>
