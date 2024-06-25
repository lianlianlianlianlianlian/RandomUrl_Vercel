<?php
// 设置时区为上海
date_default_timezone_set('Asia/Shanghai');
// 设置缓存有效期为一天
$expires = 60 * 60 * 24; // 1 day
header('Cache-Control: max-age=' . $expires);

// 获取当前日期
$currentDate = date('Y-m-d');

// 读取 random.txt 文件中的 URL 列表
$urls = file('/var/task/user/url/random.txt', FILE_IGNORE_NEW_LINES);

// 获取当前跳转的 URL
$currentUrl = $urls[array_rand($urls)];

// 更新图片操作...

// 跳转到当前 URL
header('Location: ' . $currentUrl);
exit();
?>
