<?php

session_start();
require_once "config.php";

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $token = bin2hex(random_bytes(32));
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));
        $conn->query("UPDATE users SET reset_token='$token', reset_expires='$expires' WHERE email='$email'");

        $resetLink = "http://localhost/signup/reset_password.php?token=$token";
        $subject = "Password Reset Request";
        $body = "Click the link to reset your password: $resetLink";
        $headers = "From: painlesscodeacademy@gmail.com\r\n";
        mail($email, $subject, $body, $headers);

        $message = "A password reset link has been sent to your email.";
    } else {
        $message = "No account found with that email.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <form method="post">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Send Reset Link</button>
        </form>
        <p><?= $message ?></p>
        <p><a href="index.php">Back to Login</a></p>
    </div>
</body>
</html>