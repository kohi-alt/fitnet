<?php
session_start();
$conn = new mysqli("localhost", "root", "", "fitnet_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Debugging: Check if email exists
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Email in DB: " . $row['email'] . "<br>";
        }
    } else {
        echo "No users found in database!";
        exit();
    }

    // Find user by email
    $sql = "SELECT id, fullname, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            echo "<script>alert('Login successful!'); window.location.href='home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='signin.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('No account found with that email!');</script>";
        exit();
    }
    
    $stmt->close();
}

$conn->close();
?>
