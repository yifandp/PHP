<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        var_dump($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <table>
            <tr>
                <td>用户名：</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>密码：</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="1"><input type="checkbox" name="agree" value="true">同意隐私条款</td>
            </tr>
            <tr>
                <td colspan="1">
                   <input type="checkbox" name="hobby[]" value="basketball">篮球
                   <input type="checkbox" name="hobby[]" value="football">足球
                   <input type="checkbox" name="hobby[]" value="earth">地球
                </td>
            </tr>
            <tr>
                <td><input type="radio" name="sex" value="男">男</td>
                <td><input type="radio" name="sex" value="女">女</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="登录"></td>
            </tr>
        </table>
   </form>
</body>
</html>