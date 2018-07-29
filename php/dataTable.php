<?php
    $page = empty($_GET['page'])? 1 : $_GET['page'];
    //与数据库建立连接
    $link = mysqli_connect('localhost','root','123456');

    // 判断是否链接成功
    if(!$link){
        exit('数据库链接失败');
    }

    // 设置字符集
    mysqli_set_charset($link,'utf8');

    // 选择数据库
    mysqli_select_db($link,'bbs');

    // -----------分页start-----
    // 获得总条数
    $sql = "select count(*) as count from bbs_user";
    $res = mysqli_query($link,$sql);
    $pageRes = mysqli_fetch_assoc($res);
    $count = $pageRes['count'];
    // var_dump($pageRes);
    // 每页显示5条
    $num = 5;
    // 根据每页显示数可以求出总页数
    $pageCount = ceil($count / $num);
    // var_dump($pageCount);
    // 根据总页数算出偏移量
    $offset = ($page - 1) * $num;

    $next = $page + 1;
    $prev = $page - 1;
    if($prev < 1){
        $prev = 1;  
    }
    if($next > $pageCount){
        $next = $pageCount;  
    }


    // -----------分页end----

    // 准备sql语句
    $sql = 'select * from bbs_user limit '. $offset .','. $num;

    // 发送sql语句
    $result = mysqli_query($link,$sql);

    // 处理结果集
    echo '<a href="add.php">添加</a>';
    echo '<table width="600" border="1" cellspacing="0">';
        echo '<th>姓名</th><th>年龄</th><th>性别</th><th>地址</th><th>操作</th>';

        while($rows = mysqli_fetch_assoc($result)){
            echo '<tr>';
                echo '<td>'.$rows['username'].'</td>';
                echo '<td>'.$rows['age'].'</td>';
                echo '<td>'.($rows['sex'] == 1 ? '男':'女').'</td>';
                echo '<td>'.$rows['address'].'</td>';
                echo '<td><a href="del.php?id='.$rows['id'].'">删除</a><a href="update.php?id='.$rows['id'].'">修改</a></td>';
            echo '</tr>';
        }

    echo '</table>';
    // 关闭数据库
    mysqli_close($link);
?>
<a href="dataTable.php?page=1">首页</a>&nbsp;&nbsp;&nbsp;
<a href="dataTable.php?page=<?= $prev?>">上一页</a>&nbsp;&nbsp;&nbsp;
<a href="dataTable.php?page=<?= $next?>">下一页</a>&nbsp;&nbsp;&nbsp;
<a href="dataTable.php?page=<?= $pageCount ?>">尾页</a>&nbsp;
<input type="text" value="当前页数<?= $page?>">