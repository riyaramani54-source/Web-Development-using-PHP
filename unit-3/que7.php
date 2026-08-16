<?php
// 3.7 Login using Session with Logout Protection

session_start();

// Simple login credentials for practical demonstration
$validUsername = "admin";
$validPassword = "1234";

if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: 3.7_session_login_logout.php");
    exit();
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        session_regenerate_id(true);
        $_SESSION["logged_in"] = true;
        $_SESSION["username"] = $username;
        header("Location: 3.7_session_login_logout.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

// If logged in, show home page
if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    echo "<h2>Home Page</h2>";
    echo "Welcome, " . htmlspecialchars($_SESSION["username"]) . "!<br><br>";
    echo '<a href="3.7_session_login_logout.php?logout=1">Logout</a>';
    exit();
}
?>

<h2>Login Form</h2>

<?php
if (isset($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
}
?>

<form method="post">
    Username:
    <input type="text" name="username" required><br><br>

    Password:
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

<p>Demo Username: <b>admin</b></p>
<p>Demo Password: <b>1234</b></p>
