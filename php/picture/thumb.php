<?php

    function thumb($img,$dstx,$dsty,$pre){
        // 获取原图信息
        $arr = getimagesize($img);
        $srcx = $arr[0];
        $srcy = $arr[1];
        $srctype = $arr[2];
        // 判断图片类型
        switch($srctype){
            case 1:
                $imgfrom = 'imagecreatefromgif';
                $imgout = 'imagegif';
            break;
            case 2:
                $imgfrom = 'imagecreatefromjpeg';
                $imgout = 'imagejpeg';
            break;
            case 3:
                $imgfrom = 'imagecreatefrompng';
                $imgout = 'imagepng';
            break;
        }

        // 大图资源
        $srcimg = $imgfrom($img);

        // 等比缩放算法
        $scale = max($srcx / $dstx,$srcy / $dsty);
        $dstx = floor($srcx / $scale);
        $dsty = floor($srcy / $scale);

        // 目标资源
        $dstimg = imagecreatetruecolor($dstx,$dsty);

        // 图片缩放
        imagecopyresampled($dstimg,$srcimg,0,0,0,0,$dstx,$dsty,$srcx,$srcy);

        // 保存路径
        $dir = dirname($img);
        $file = basename($img);
        $savepath = $dir.'/'.$pre.$file;

        $imgout($dstimg,$savepath);

        // 关闭画布资源
        imagedestroy($dstimg);
        imagedestroy($srcimg);
    }

    $img = 'img/banner.jpg';
    
    /*
    thumb($img,1000,1000,'lg_1000_');
    thumb($img,500, 500,'md_500_');
    thumb($img,200,200,'sm_200_');
    thumb($img,100,100,'xs_100_');
    */
?>