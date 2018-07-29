<?php
    // 创建画布
    $img = imagecreatetruecolor(300,300);
    // 准备颜色
    $green = imagecolorallocate($img,0,255,0);
    $red = imagecolorallocate($img,255,0,0);
    // 在画布上画图像
    imagefill($img,0,0,$green);
    imagefilledellipse($img,100,100, 50,50, $red);
    // 输出最终图片
    imagejpeg($img,'a.jpg');
    // 释放画布资源
    imagedestroy($img);
?>