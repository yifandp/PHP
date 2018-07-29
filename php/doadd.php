<?php
    $username = $_GET['username'];
    $password = md5($_GET['password']);
    $age = $_GET['age'];
    $sex = $_GET['sex'];
    $address = $_GET['address'];

    
    $link = mysqli_connect('localhost','root','123456');
    if(!$link){
        exit('数据库链接失败');
    }

    mysqli_set_charset($link, 'utf8');

    mysqli_select_db($link,'bbs');

    $sql = "insert into bbs_user(username,password,age,sex,address) values('$username','$password',$age,$sex,'$address')";

    $boolear = mysqli_query($link,$sql);
    
    $id = mysqli_insert_id($link);

    if($id){
        echo '数据添加成功<a href="dataTable.php">返回</a>';
    }else{
        echo '数据添加失败';
    }

    mysqli_close($link);

?>