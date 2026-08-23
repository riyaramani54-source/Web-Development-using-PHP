<?php
session_start();
session_unset();
session_destroy();

header("Location: 9_login.php");
exit;
?>