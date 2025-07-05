<?php

session_start();
require_once "config.php";

$message = "";

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $result = $conn->query("SELECT * FROM users WHERE reset_token='$token' AND reset_expires > NOW()");
    if ($result->num_rows === 0) {
        $message = "Invalid or expired token.";
    } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $conn->query("UPDATE users SET password='$password', reset_token=NULL, reset_expires=NULL WHERE reset_token='$token'");
        $message = "Password has been reset. <a href='index.php'>Login</a>";
    }
} else {
    $message = "No token provided.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <?php if ($message): ?>
            <p><?= $message ?></p>
        <?php elseif (isset($token)): ?>
            <form method="post">
                <input type="password" name="password" placeholder="New Password" required>
                <button type="submit">Reset Password</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>