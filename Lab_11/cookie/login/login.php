<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate login (you should replace this with actual user authentication)
    if ($username === "Amaar" && $password === "12345678") {
        $_SESSION['username'] = $username;
        
        // Set a cookie for 1 hour (adjust as needed)
        setcookie('login_status', 'authenticated', time() + 3600, '/');

        // Redirect to the validated page
        header("Location: validated_page.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: loginform.php"); // Redirect back to the login form
        exit();
    }
}
?>
