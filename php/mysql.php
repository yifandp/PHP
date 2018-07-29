<?php
    // 链接数据库
    $link = mysqli_connect('localhost','root','123456');

    // 判断数据库是否链接成功
    if(!$link){
        exit('数据库链接失败');
    };

    // 设置数据库字符集
    mysqli_set_charset($link, 'utf8');

    // 选择数据库
    mysqli_select_db($link,'bbs');

    // 准备sql语句
    $sql = 'select * from bbs_user';
    // 发送sql语句
    $res = mysqli_query($link,$sql);

    //处理结果集
    //$result = mysqli_fetch_assoc($res);
    // var_dump($result);

    while($rows = mysqli_fetch_assoc($res)){
        var_dump($rows);
    }
    // 关闭数据库
    mysqli_close($link); 
?>