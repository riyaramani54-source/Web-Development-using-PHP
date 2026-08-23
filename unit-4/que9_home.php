<?php
// Home page for authenticated users
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: 9_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title></head>
<body>
<h2>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
<p>You have successfully logged in.</p>
<a href="9_logout.php">Logout</a>
</body>
</html>