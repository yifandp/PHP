<?php
    function upload(){
        if(!isset($_FILES['avatar'])){
            $GLOBALS['message'] = '没有上传文件';
            return;
        }

        $avatar = $_FILES['avatar'];

        if($avatar['error'] !== UPLOAD_ERR_OK ){
            // 服务端没有接收到上传的文件
            $GLOBALS['message'] = '上传失败';
            return;
        }

        // 接收到的文件
        // 将文件从临时目录移动到网站范围之内
        if(!is_dir('./uploads')){
            mkdir('./uploads');
        }

        $source = $avatar['temp_name']; // 临时文件途径
        $target = './uploads/'.$avatar['name']; // 服务器的目标文件

        $moved = move_uploaded_file($source,$target);
        
        var_dump($moved);


        if(!$moved){
            $GLOBALS['message'] = '移动文件失败';
            return;
        }

        // 移动成功
    }


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        upload();
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
    <!-- 如果表单中有文件上传 form表单必须设置为 method="post" enctype="multipart/form-data" -->
    <!-- 默认为 urlencoded -->
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <button>上传</button>
        <?php if(isset($message)){ ?>
            <p style="color: hotpink;"><?php echo $message ?></p>
        <?php }?>
    </form>
</body>
</html>