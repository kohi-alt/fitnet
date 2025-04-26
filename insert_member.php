<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "fitnet_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $medical_history = $_POST['medical_history'];
    $physical_limitations = $_POST['physical_limitations'];
    $dietary_restrictions = $_POST['dietary_restrictions'];
    $fitness_goal = $_POST['fitness_goal'];
    $preferred_exercises = $_POST['preferred_exercises'];
    $availability = $_POST['availability'];
    $emergency_name = $_POST['emergency_name'];
    $emergency_relationship = $_POST['emergency_relationship'];
    $emergency_contact = $_POST['emergency_contact'];
    $date_created = date('Y-m-d');

    $stmt = $conn->prepare("INSERT INTO members_tbl 
        (fullname, address, contact, email, age, gender, medical_history, physical_limitations, dietary_restrictions, fitness_goal, preferred_exercises, availability, emergency_name, emergency_relationship, emergency_contact, date_created) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssisssssssssss", $fullname, $address, $contact, $email, $age, $gender, $medical_history, $physical_limitations, $dietary_restrictions, $fitness_goal, $preferred_exercises, $availability, $emergency_name, $emergency_relationship, $emergency_contact, $date_created);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful!'); window.location.href='program_page.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
