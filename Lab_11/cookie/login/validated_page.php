<?php
session_start();

// Check if the user is logged in or has a valid cookie
if (!isset($_SESSION['username']) || !isset($_COOKIE['login_status']) || $_COOKIE['login_status'] !== 'authenticated') {
    header("Location: loginform.php"); // Redirect to login form if not logged in
    exit();
}

// Continue with the content of the validated page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validated Page</title>
</head>
<body>
    <h2>Welcome to the Validated Page, <?php echo $_SESSION['username']; ?>!</h2>
    <p>This is a secure page only accessible after successful login.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
