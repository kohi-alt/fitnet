<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Check if email exists
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generate unique token
        $token = bin2hex(random_bytes(50));

        // Save token in database
        $sql = "UPDATE users SET reset_token='$token' WHERE email='$email'";
        $conn->query($sql);

        // Send reset email
        $reset_link = "http://yourwebsite.com/reset_password.php?token=$token";
        $subject = "Password Reset Request";
        $message = "Click the link to reset your password: $reset_link";
        $headers = "From: support@yourwebsite.com";

        mail($email, $subject, $message, $headers);

        echo "A password reset link has been sent to your email!";
    } else {
        echo "Email not found!";
    }
}
?>
