<?php
    session_start();
    if(empty($_SESSION['username'])){
        exit('未登录，请先登录');
    }else{
        echo '你好'.$_SESSION['username'];
    }
?>