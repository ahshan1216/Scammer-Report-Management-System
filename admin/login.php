<?php
session_start();
include('../db.php');  // Include database connection

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);  // MD5 hash of password

    // Query to check if username and password exist in the database
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Successful login
        $_SESSION['username'] = $username; // Save username in session
        header("Location: admin_panel.php"); // Redirect to admin panel
    } else {
        // Failed login
        echo "<script>alert('Invalid Username or Password');</script>";
    }
}
?>

<!-- Include your login form HTML here -->
