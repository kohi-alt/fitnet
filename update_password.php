<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        die("Passwords do not match!");
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Update password and remove reset token
    $sql = "UPDATE users SET password='$hashed_password', reset_token=NULL WHERE reset_token='$token'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully! <a href='signin.php'>Login</a>";
    } else {
        echo "Error updating password: " . $conn->error;
    }
}
?>
