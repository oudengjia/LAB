<<?php
session_start();

// 假设用户名和密码为固定的示例
$correct_username = "user";
$correct_password = "pass123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $correct_username && $password === $correct_password) {
        // 登录成功，设置会话变量
        $_SESSION['username'] = $username;
        // 重定向到仪表盘
            header("Location: materials.html"); // 重定向到材料页面
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>