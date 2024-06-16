<?php
// 文件路径
$filePath = 'js/main.js';

// 计算文件的SHA-256哈希值
$hashValue = hash_file('sha256', $filePath);

echo "$hashValue";
?>
