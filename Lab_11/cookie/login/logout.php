<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Expire the cookie by setting it to a past time
setcookie('login_status', '', time() - 3600, '/');

// Redirect to the login form
header("Location: ./loginform.php");
exit();
?>
