<?php
session_start();

if (!isset($_SESSION['username'])) {
    // 如果用户未登录，重定向到登录页面
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gong Lab</title>
    <link rel="stylesheet" href="./main.css">
  </head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <p>This is your dashboard.</p>
    <a href="logout.php">Logout</a>
</body>
</html>