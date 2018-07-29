<?php 
// 1、 php常量
// 使用常量函数定义常量： define()
	define("PI",3.14);

  // 使用const关键字定义
	const PII = 3.1415;

// defin() 定义特殊常量
	define('_',"smile");
// 
// 常量的使用
	echo PI."\n";
	echo PII."\n";

	echo constant('_')."\n";

	// 常用的几个系统常量
	// PHP_VERSION php的版本号
	// PHP_INT_SIZE 整型大小
	// PHP_INT_MAX 整型能表示的最大值（PHP中整型是允许出现负数： 带符号）
	echo '<hr>',PHP_VERSION,'<br>',PHP_INT_SIZE,'<br>',PHP_INT_MAX,"\n";

	// php中的魔术常量
	// __DIR_ 当前被执行的脚本所在电脑的绝对路径
	// __FILE__ 当前被执行的脚本所在电脑的绝对路径（带自己的文件名）
	// __LINE__ 当前所属的行数
	
	// __CLASS__ 当前所数属的类名
	// __METHOD__ 当前所属的方法
	// __NAMESPACE__ 当前所属的命名空间
	echo __DIR__,"\n";
	echo __FILE__,"\n";
	echo __LINE__,"\n";


	//2、php的八种数据类型
	/*1)简单数据类型（基本）4个小类
		整型 int/integer 系统分配4个字节存储
		浮点型 float/double 系统分配八个字节存储
		字符串型 string  系统根据长度分配
		布尔类型 bool/boolean 

	 2) 复合数据类型 2个小类
	 	对象类型： object 存储对象（面向对象）
	 	数组类型： array 存储多个数据 （一次性）
		
	 3）特殊数据类型 2个小类
	 	资源类型 resource 存放资源类型
	 	空类型 NULL 只有一个值NULL
	*/


   // 3.类型转换
   // 	$a = '1.113.4'
   		// 3.1 强制转换 如： (float)$a
   // 4.类型判断
   // var_dump(is_int($a)); // true;
   // var_dump(is_string($a)); // false;
   // 
   // 获取数据类型
   // gettype($a);
   // 设置数据类型
   // settype($a,'int');
   // 
   // 进制转换函数
   // Decbin(); 十进制转二进制
   // Decoct();	十进制转八进制
   // Dechex(); 十进制转十六进制
   // Bindec(); 二进制转十进制
	echo '<hr />';
	$b = 'name';

	echo $b."\n";

	$a = "weekend";
	$b = 'goods';

	var_dump($a == "weekend" && $b == "goods");
	
	$c = -5;
	var_dump($c>>1);



 ?>

<table border=1 cellpadding="0">
	<?php for($i = 1; $i < 10; $i++){ ?>
		<tr>
			<?php for($j = 1; $j <= $i; $j++){ ?>
				<td><?php echo $j.' * '.$i.' = '.$i*$j ?></td>
			<?php } ?>
		</tr>
	<?php } ?>
</table>

<table border=1 cellpadding="0">
	<?php for($i = 1; $i < 10; $i++): ?>
		<tr>
			<?php for($j = 1; $j <= $i; $j++): ?>
				<td><?php echo $j.' * '.$i.' = '.$i*$j ?></td>
			<?php endfor ?>
		</tr>
	<?php endfor ?>
</table>