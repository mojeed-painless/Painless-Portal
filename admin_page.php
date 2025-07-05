<?php

session_start();
require_once "config.php";

// Only log in users can access this page
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

// Only allow admins
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Approve user if requested
if (isset($_GET['approve'])) {
    $userId = intval($_GET['approve']);
    $conn->query("UPDATE users SET approved = 1 WHERE id = $userId");
    
    // Fetch user email and name
    $userResult = $conn->query("SELECT email, name FROM users WHERE id = $userId");
    if ($userResult && $user = $userResult->fetch_assoc()) {
        $to = $user['email'];
        $subject = "Your Account Has Been Approved";
        $message = "Hello " . htmlspecialchars($user['name']) . ",\n\nYour account has been approved. You can now log in.\n\nThank you!";
        $headers = "From: painlesscodeacademy@gmail.com\r\n";
        // Send the email
        mail($to, $subject, $message, $headers);
    }

    header("Location: admin_page.php");
    exit();
}

// Delete user if requested
if (isset($_GET['delete'])) {
    $userId = intval($_GET['delete']);
    $conn->query("DELETE FROM users WHERE id = $userId");
    header("Location: admin_page.php");
    exit();
}

// Get all users
$allUsers = $conn->query("SELECT id, name, email, role, approved FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="box">
        <h2>Welcome to the <span>admin</span> page, <span><?= $_SESSION['name']; ?></span></h2>

        <div class="user-list">

            <h4>All Registered Users</h4>

            <table cellpadding="8">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Delete</th>
                    </tr>
                    <?php while ($row = $allUsers->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['role']) ?></td>
                        <td>
                            <?= $row['approved'] ? "<span class='approved-status'>Approved</span>" : "<span class='pending-status'>Pending</span>" ?>
                        </td>
                        <td>
                            <?php if (!$row['approved']): ?>
                                <a href="?approve=<?= $row['id'] ?>">Approve</a>
                            <?php else: ?>
                                <span>—</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');" style="color:red;">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
            </table>
        </div>

        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>

    
    
    
</body>
</html>