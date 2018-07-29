<?php
    // echo '这是删除页';
    $id = $_GET['id'];

    // 与数据库建立链接
    $link = mysqli_connect('localhost','root','123456');

    // 判断是否链接成功
    if(!$link){
        exit('数据库连接失败');
    }

    // 设置字符集
    mysqli_set_charset($link,'utf8');

    // 选择数据库
    mysqli_select_db($link,'bbs');

    // 准备sql语句
    $sql = "delete from bbs_user where id=$id";
    // 发送sql语句
    $booleam = mysqli_query($link,$sql);

    if($booleam && mysqli_affected_rows($link)){
        echo '数据删除成功<a href="dataTable.php">返回</a>';
    }else{
        echo '数据删除失败';
    }
    // 关闭数据库
    mysqli_close($link);
?>