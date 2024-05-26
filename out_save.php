<?php
$fileSelection = $_POST['fileSelection']; // 将变量名改为与 HTML 表单中的名称相匹配

// 写入文件
$file = fopen("out.txt", "w") or die("No out.txt:无法打开文件！");
fwrite($file, $fileSelection);
fclose($file);

echo '<script>alert("更改成功!");</script>';

echo '<script>
    localStorage.setItem("loggedIn", "true");
    window.location.replace("admin.html");
    </script>';
?>