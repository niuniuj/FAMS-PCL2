<?php
    // 检测是否为浏览器
    function isBrowser()
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $browsers = array('Mozilla', 'Chrome', 'Safari', 'Opera', 'IE');
    
        foreach ($browsers as $browser) {
            if (strpos($user_agent, $browser) !== false) {
                return true;
            }
        }
    
        return false;
    }
    
    // 是-跳转页面
    if (isBrowser()) {
        include 'index.html'; // 跳转index.html
    } else {
        // 不是-输出
    // 读取out文件
        $file_selection = file_get_contents('out.txt');
    
        // 判断路径
        if ($file_selection === 'normal') {
            $file_path = '/www/wwwroot/html.fams-server.top/out/Custom.xaml'; // 设置正常状态下的文件路径
        } else {
            $file_path = '/www/wwwroot/html.fams-server.top/out/404.xaml'; // 设置 404 状态下的文件路径
        }
    
        // 发送文件给用户下载
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="file-to-download.xaml"');
        readfile($file_path);
    }
?>