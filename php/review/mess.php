<?php
    $link = mysqli_connect('localhost','root','123456');
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'yfedu');
    $sql = "select * from mess";
    $res = mysqli_query($link,$sql);
    $rows = array();
    while($row = mysqli_fetch_assoc($res)){
        $rows[] = $row;
    }
?>

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
    .mess-warp h2{
        margin-bottom: 10px;
    }
    .mess{
        color: #fff;
        background: #323223;
        border-radius: 4px;
        padding: 0 20px;
        margin-bottom: 10px;
    }
    .mess h3{
        padding: 10px 0;
        border-bottom: 1px solid #aaa;
    }
    .mess-desc{
        font-size: 16px;
        line-height: 20px;
        padding: 10px 0;
    }
    .gotomess{
        margin: 5px;
        padding: 10px 0;
    }
    </style>
</head>
<body>
    <div class="mess-warp">
        <h2>查看评论:</h2>
        <div class="gotomess">没有写评论？ <a href="addmess.php">去写评论</a></div>
        <?php
        if(!$rows){
            echo '<p style="text-align: center;">暂无评论！</p>';
            die();
        }else{
            foreach($rows as $row){      
        ?>
            <div class="mess">
                <h3><?php echo $row['user']?></h3>
                <div class="mess-desc">
                    <?php echo $row['content']?>
                </div>
            </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>