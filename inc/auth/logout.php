<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
setcookie('prelog', '', time() - 3600, '/');
// Redirect to login page
header("location:http://localhost/auth/auth/writeroo");
exit;
?>