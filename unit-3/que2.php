<?php
// 3.2 Read Cookie of a Form

if (isset($_COOKIE["username"])) {
    echo "Welcome, " . htmlspecialchars($_COOKIE["username"]);
} else {
    echo "Cookie is not set.";
}
?>
