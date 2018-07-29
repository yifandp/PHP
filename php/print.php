<?php 
	// 系统输出
	// 输出相关
	echo print_r('hello php'."<br>");
	print('hello php <br>');	

	//时间相关
	echo date('Y年 m月 d日 H:i:s'),"<br>"; 

	echo time(),"<br>"; // 返回当前的时间秒数

	echo microtime(),"<br>"; //当前的时间戳以及微妙数

	echo strtotime('tomorrow 10 hours'),"<br>" ;// 按照规定格式的字符串转换成时间戳
?>