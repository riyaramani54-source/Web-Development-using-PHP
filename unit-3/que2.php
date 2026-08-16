<?php
// 2.2 Sort an array entered by user

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["numbers"];
    $array = array_map("trim", explode(",", $input));

    sort($array);

    echo "<h3>Sorted Array:</h3>";
    echo htmlspecialchars(implode(", ", $array));
}
?>

<form method="post">
    Enter numbers separated by commas:<br>
    <input type="text" name="numbers" placeholder="50,20,40,10,30" required>
    <button type="submit">Sort Array</button>
</form>
