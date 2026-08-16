<?php
// 3.1 Create Cookie in a Form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    setcookie("username", $username, time() + 3600, "/");

    echo "Cookie created successfully for: " . htmlspecialchars($username);
}
?>

<form method="post">
    Enter Username:
    <input type="text" name="username" required>
    <button type="submit">Create Cookie</button>
</form>
