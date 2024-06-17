<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header("Location: ../login.php");
    exit;
}
include('../includes/db.php');

// Dashboard content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="header">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="manage_content.php">Manage Content</a></li>
        </ul>
    </div>
    <div class="footer">
        <p>© 2023 Your Website</p>
    </div>
</body>
</html>