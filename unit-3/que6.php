<?php
// 3.6 Destroy a Session

session_start();

session_unset();
session_destroy();

echo "Session destroyed successfully.";
?>
