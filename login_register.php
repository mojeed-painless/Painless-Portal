<?php
    session_start();

    require_once "config.php";
    
    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = $_POST['role'];

        $checkEmail = $conn->query("SELECT email FROM users WHERE email = 'email'");
        if ($checkEmail->num_rows > 0) {
            $_SESSION['register_error'] = "Email is already registered!";
            $_SESSION['active_form'] = 'register';
        } else {
            $conn->query("INSERT INTO users (name, email, password, role, approved) VALUES ('$name', '$email', '$password', '$role', 0)");
        
            // Send email notification to admin
        $adminEmail = "painlesscodeacademy@gmail.com"; // <-- Change to your admin email
        $subject = "New User Registration";
        $message = "A new user has registered:\n\nName: $name\nEmail: $email\nRole: $role\n\nPlease review and approve the account.";
        $headers = "From: painlesscodeacademy@gmail.com\r\n";
        mail($adminEmail, $subject, $message, $headers);
        }

        header("Location: index.php");
        exit();
    }


    //handle login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            if ($user['approved'] == 0) {
                $_SESSION['login_error'] = "Your account is pending approval.";
                $_SESSION['active_form'] = 'login';
                header("Location: index.php");
                exit();
            }

            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];

            $_SESSION['role'] = $user['role']; // <-- Add this line

            if ($user['role'] === 'admin') {
                header("Location: admin_page.php");
            } else {
                header("Location: user_page.php");
            }
        exit();
            
        } 
    } 

    $_SESSION['login_error'] = "Invalid email or password!";
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}
?>