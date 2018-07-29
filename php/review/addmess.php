<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding: 0;
    }
    .mess-warp{
        width: 80%;
        margin: 20px auto;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 4px;
    }
    .mess-warp textarea{
        margin-top: 10px;
        width: 300px;
        height: 100px;
        resize:none;
    }
    </style>
</head>
<body>
    <div class="mess-warp">
        <h2>发布评论：</h2>
        <form action="submitmess.php" method="post">
            <label>用户名：</label>
            <input type="text" name="user" id=""><br/>
            <label>评论内容：</label><br/>
            <textarea name="content" id=""></textarea>
            <div>
                <input type="submit" value="提交"><input type="reset" value="重置">
            </div>
        </form>
    </div>
</body>
</html>