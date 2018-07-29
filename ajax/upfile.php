<?php
  // 获取上传到而文件 $_FILES()
  // print_r($_FILES);
  $upFile = $_FILES["files"];
  // print_r($upFile);
  // 解析上传的文件
  $fileName = $upFile["name"];
  // print_r($fileName);
  $filePath = $upFile["tmp_name"];
  // print_r($filePath);
  // 上传文件
  move_uploaded_file($filePath, "./source/" .$fileName);
?>
