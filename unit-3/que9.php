<?php
// 3.9 Remember Username and Password using Cookies
// For classroom demonstration only.
// In real applications, never store passwords directly in cookies.

$rememberedUsername = $_COOKIE["remember_username"] ?? "";
$rememberedPassword = $_COOKIE["remember_password"] ?? "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["remember"])) {
        setcookie("remember_username", $username, time() + (30 * 24 * 60 * 60), "/");
        setcookie("remember_password", $password, time() + (30 * 24 * 60 * 60), "/");
        $message = "Username and password have been remembered.";
    } else {
        setcookie("remember_username", "", time() - 3600, "/");
        setcookie("remember_password", "", time() - 3600, "/");
        $message = "Remember me option is not selected.";
    }
}
?>

<h2>Login Form</h2>

<?php
if (isset($message)) {
    echo "<p>" . htmlspecialchars($message) . "</p>";
}
?>

<form method="post">
    Username:
    <input type="text" name="username"
           value="<?php echo htmlspecialchars($rememberedUsername); ?>" required>
    <br><br>

    Password:
    <input type="password" name="password"
           value="<?php echo htmlspecialchars($rememberedPassword); ?>" required>
    <br><br>

    <input type="checkbox" name="remember"
           <?php echo $rememberedUsername !== "" ? "checked" : ""; ?>>
    Remember Me
    <br><br>

    <button type="submit">Login</button>
</form>
