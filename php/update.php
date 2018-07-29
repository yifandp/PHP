<?php
    // echo '这是修改页';
    $id = $_GET['id'];

    // 与数据库建立连接
    $link = mysqli_connect('localhost','root','123456');
    // 判断是否链接成功
    if(!$link){
        exit('数据库链接失败');
    }
    // 设置字符集
    mysqli_set_charset($link, 'utf8');
    // 选择数据库
    mysqli_select_db($link,'bbs');
    // 准备sql语句
    $sql = "select * from bbs_user where id = $id";
    // 发送sql语句
    $result = mysqli_query($link,$sql);
    // 处理结果集
    $rows = mysqli_fetch_assoc($result);
    // 关闭数据库
    mysqli_close($link);
?>

<html>
    <form action="doupdata.php">
        <input type="hidden" value="<?php echo $rows['id']?>" name="id">
        用户名：<input type="text" value="<?php echo $rows['username']?>" name="username"><br />
        年龄：<input type="text" value="<?php echo $rows['age']?>" name="age"><br />
        性别：<input type="text" value="<?php echo $rows['sex']?>" name="sex"><br />
        地址：<input type="text" value="<?php echo $rows['address']?>" name="address"><br />
        <input type="submit" value="提交修改">
    </form>
</html>