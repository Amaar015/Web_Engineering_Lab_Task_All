<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $mobile=$_POST["number"];
    $color=$_POST["color"];
    $contry=$_POST["contry"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate inputs
    if (empty($username) ||  empty($mobile) || empty($color) || empty($contry)  || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: index.php");
        exit();
    }

    // Additional validation (you can add more based on your requirements)
    if (strlen($password) < 8) {
        $_SESSION['error'] = "Password must be at least 8 characters long.";
        header("Location: index.php");
        exit();
    }

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: index.php");
        exit();
    }

    // Registration successful (you can save data to a database here)
    echo "Registration successful!";
    header("Location:login/loginform.php");
    // You might want to redirect the user to a different page after successful registration
}
?>
