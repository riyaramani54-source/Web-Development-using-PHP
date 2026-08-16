<?php
// 3.4 Delete a Cookie

setcookie("username", "", time() - 3600, "/");

echo "Cookie deleted successfully.";
?>
