<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 检查密码是否正确
    if ($password === "FAMSserver114514" and $username === "admin") {
        $_SESSION['username'] = $username; // 将用户名存储在会话中

        // 设置localStorage的loggedIn状态
        echo '<script>
                localStorage.setItem("loggedIn", "true");
                window.location.replace("admin.html");
              </script>';
    } else {
        echo '<script>alert("密码错误，请重新输入！");</script>';
        echo '<script>window.location.replace("login.html");</script>';
    }
?>