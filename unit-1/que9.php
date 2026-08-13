<?php
// 1.9 Reverse array values entered by user

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];
    $array = array_map("trim", explode(",", $input));
    $reversedArray = array_reverse($array);

    echo "<h3>Original Array:</h3>";
    echo htmlspecialchars(implode(", ", $array));

    echo "<h3>Reversed Array:</h3>";
    echo htmlspecialchars(implode(", ", $reversedArray));
}
?>

<form method="post">
    Enter array values separated by commas:<br>
    <input type="text" name="numbers" placeholder="10,20,30,40,50" required>
    <button type="submit">Reverse Array</button>
</form>
