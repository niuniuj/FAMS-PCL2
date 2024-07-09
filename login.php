<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = hash('sha256',$password);
    
    // 检查密码是否正确
    if ($password === "067b126a50ae65dffda8022d77cf161bd4b898937ea050e58a3ef884bd59e98b" and $username === "admin") {
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