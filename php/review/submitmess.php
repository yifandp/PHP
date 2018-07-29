<?php

    $link = mysqli_connect('localhost','root','123456');
    mysqli_set_charset($link,'utf8');
    mysqli_select_db($link,'yfedu');

    $user = $_POST['user'];
    $content = strip_tags(addslashes($_POST['content']));

    $sql = "insert into mess(user,content) values('{$user}','{$content}')";
    if(mysqli_query($link,$sql)){
        echo '<script>location="mess.php"</script>';
    }
?>
