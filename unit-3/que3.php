<?php
// 3.3 Use Cookie with Header

if (!isset($_COOKIE["visited"])) {
    setcookie("visited", "yes", time() + 3600, "/");

    header("Location: 3.3_cookie_with_header.php");
    exit();
}

echo "Cookie has been created and header redirected the page.";
?>
