<?php
// Start session
session_start();

// Retrieve username and password from form
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

// Your authentication logic here (replace this with your own logic)
// For demonstration purposes, let's check if username and password are "admin"
if ($username === "admin" && $password === "admin") {
    // Authentication successful, set session variables
    $_SESSION["username"] = $username;

    // Redirect to welcome page
    header("Location: welcome.php");
    exit();
} else {
    // Authentication failed, redirect back to login page with error message
    header("Location: index.html?error=1");
    exit();
}
?>
