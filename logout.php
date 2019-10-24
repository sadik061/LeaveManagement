<?php
// remove all session variables
session_start();
session_unset();

// destroy the session
session_destroy();
setcookie("remember", "false", time() + (86400 * 30), "/");
header('Location: login.php');
?>