<?php
// var_dump($_GET);

$id = $_GET['id'];
$username = $_GET['username'];
$age = $_GET['age'];
$sex = $_GET['sex'];
$address = $_GET['address'];

$link = mysqli_connect(
    'localhost',
    'root',
    '123456'
);
if(!$link){
    exit('数据库链接失败');
}
mysqli_set_charset($link,'utf8');

mysqli_select_db($link,'bbs');

$sql = "update bbs_user set username='$username', age='$age', sex='$sex', address='$address'  where id=$id";

$result = mysqli_query($link,$sql);

if($result && mysqli_affected_rows($link)){
    echo '数据修改成功<a href="dataTable.php">返回</a>';
}else{
    echo '数据修改失败';
}

mysqli_close($link);

?>