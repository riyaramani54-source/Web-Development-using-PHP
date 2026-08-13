<?php
// 2.6 User-defined function for calculator

function calculator($num1, $num2, $operator)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            if ($num2 == 0) {
                return "Cannot divide by zero";
            }
            return $num1 / $num2;
        default:
            return "Invalid operator";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (float)$_POST["num1"];
    $num2 = (float)$_POST["num2"];
    $operator = $_POST["operator"];

    $result = calculator($num1, $num2, $operator);
    echo "<h3>Result: $result</h3>";
}
?>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" step="any" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" step="any" required><br><br>

    Select Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <button type="submit">Calculate</button>
</form>
