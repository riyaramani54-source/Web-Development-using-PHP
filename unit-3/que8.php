<?php
// 3.8 Identify New or Repeated User using Cookie

if (isset($_COOKIE["returning_user"])) {
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated visitor.";
} else {
    setcookie("returning_user", "yes", time() + (30 * 24 * 60 * 60), "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new visitor.";
}
?>
