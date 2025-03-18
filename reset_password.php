<?php
include 'db_connect.php';

$token = $_GET['token'];
$sql = "SELECT * FROM users WHERE reset_token='$token'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    die("Invalid or expired token!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Reset Your Password</h2>
            <form action="update_password.php" method="POST">
                <input type="hidden" name="token" value="<?= $token ?>">
                
                <div class="mb-3">
                    <label>New Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Confirm Password:</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success w-100">Update Password</button>
            </form>
        </div>
    </div>

</body>
</html>
