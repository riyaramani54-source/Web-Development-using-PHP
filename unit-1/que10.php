<?php
// 1.10 Merge two arrays entered by user

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = $_POST["array1"];
    $input2 = $_POST["array2"];

    $array1 = array_map("trim", explode(",", $input1));
    $array2 = array_map("trim", explode(",", $input2));

    $mergedArray = array_merge($array1, $array2);

    echo "<h3>First Array:</h3>";
    echo htmlspecialchars(implode(", ", $array1));

    echo "<h3>Second Array:</h3>";
    echo htmlspecialchars(implode(", ", $array2));

    echo "<h3>Merged Array:</h3>";
    echo htmlspecialchars(implode(", ", $mergedArray));
}
?>

<form method="post">
    Enter first array values separated by commas:<br>
    <input type="text" name="array1" placeholder="1,2,3" required><br><br>

    Enter second array values separated by commas:<br>
    <input type="text" name="array2" placeholder="4,5,6" required><br><br>

    <button type="submit">Merge Arrays</button>
</form>
