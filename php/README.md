PHP
===
### 【强制类型转换】
    * intval()  转为整型
    * floatval() 转为浮点型
    * strval() 转为字符串
    * boolval() 转为布尔值

---

### 【强制类型转换】
    1. 空转化为整型会是0
    2. 空转化为浮点型变成浮点型的0
    3. 空转化为字符串会变成 字符串 ‘’ tip: 中间不能有任何字符包括空格
    4. 整型如果后面有字符串会把字符串去掉保留数字部分包括小数以后的

--- 

### 【判断数据类型常用函数】
    1. is_array() 数组
    2. is_string() 字符串
    3. is_bool() 布尔
    4. is_float() 浮点
    5. is_objet() 对象
    6. is_int() 整型
    7. is_numeric() 数值
    8. is_null() 空
    9. is_resource() 资源
    10. is_scalar() 标量

---

### 【常量】
    常量定义： 程序运行时不可更改
    格式：define（'常量名字'，'常量的值'）;
    注意：
        1. 不能重复定义
        2. 常量的名字一般用大写字母
        3. 常量的值只能是标量
        4. 常量的作用域是全局的
        5. 输出的时候没有$符号
        6. 常量不能写到字符串中

### 【判断常量是否被定义】
    defined('常量名')

----

### 【系统常量】
    1. __FILE__ 找到你的文件
    2. __LINE__ 你的代码所在行数
    3. __DIR__ 找到你当前访问文件所在目录
    4. PHP_OS 获取系统信息
    5. PHP_VERSION 获取版本信息
    6. __FUNCTION__ 获取当前函数名
    7. M_PI 圆周率
    8. __MHTHOD__ 获取当前成员方法名
    9. __NAMESPACE  获取当前命名空间名字
    10. __TRAIT__ 获取当前TRAIT名字（多继承）
    11. __CLASS__ 获取当前类名

---

### 如何包含外部文件
    1. include 'config.php';
    2 .require 'config.php';
### include 和 require 的区别
    1. include 包含文件报错级别为warning, 不会终止脚本
    2. require 包含文件报错级别为error, 会终止脚本 

---

### 数组的赋值
 1. 简单赋值
 $arr[0] = 'html5';

 2. 复杂赋值
 $arr[100] = 'javascript'  
 $arr[] = 'web';  
 它的下标是前面所有key中最大数字加1

---

### 数组遍历
1. for遍历
```
for($i = 0; $i < 4; $i++){
    echo "<p>{$i} ---- {$arr[$i]}</p>";
}
```
2. while..list..each 遍历
```
while(list($key,$value) = each($arr)){
    echo "<p>{$key} ---- {$value}</p>";
}
```
3. foreach 遍历
```
foreach($arr as $key => $value){
    echo "<p>{$key} -------- {$value}</p>";
}
```

---

### 超全局数组
1. $_SERVER
2. $_GET
3. $_POST
4. $_REQUEST
5. $_GLOBALS
6. $_COOKIE
7. $_SESSION
8. $_FILES

---

### 数组的处理函数
1. array_values() 获取数组中的值
2. array_keys() 获取数组中的键
3. in_array(); 检查一值在不在数组中
4. array_key_exists(); 检查一键在不在数组中
5. array_flip();  建值对调
6. array_reverse(); 数组反转
7. count(); 统计数组元素个数
8. array_count_values() 统计数组中所有值出现的次数
9. array_unique() 统计数组中的唯一值
10. array_filter() 过滤数组中的值
11. array_map() 使用回调函数改变数组中的值

---

### 数组的排序函数
1. sort(); 不保留key 升序排序
2. rsort(); 不保留key 降序排序
3. asort(); 保留key 升序排序
4. arsort(); 保留key 降序排序
5. ksort(); 按key升序排序
6. krsort(); 按key降序排序
7. natsort(); 按自然数排序
8. netcasesort(); 自然数忽略大小写排序
9. array_multisort(); 多数组排序

---

### 数组截取与合并函数
1. array_slice(); 数组截取
2. array_splice(); 数组截取(插入) 改变原数组
3. array_combine(); 数组合并(键值合并)
4. array_merge(); 数组合并(值合并)

---

### 数组拆分与连接函数：
1. exploade(); 数组分割
2. imploade(); 数组合并
3. join(); 数组合并

--- 

### 数组与数据结构
1. array_pop(); 删除数组中最后一个值（返回被删除项）
2. array_push(); 添加一个数到数组最后（返回数组的长度）
3. array_shift(); 删除数组中第一个值（返回被删除项）
4. array_unshift(); 添加一个数到数组最前（返回数组的长度

---

### 其他的数组处理函数
1. array_rand(); 从数组中随机一个key值
2. shuffle(); 打乱原数组
3. array_sum(); 计算数组中的值之和
4. range(); 返回指定数字或字母的范围之内的数组 如range(0,9); range('A','Z');

### 五位数验证码
```
// 合并数组
$arr = array_merge(range(0,9),range('a','z'),range('A','Z'));
// 打乱原数组
shuffle($arr);
// 截取数组前五位
$arr2 = array_slice($arr,0,5);
// 用空字符串拼接转为字符串
$str = join('',$arr2);
// 输出
echo $str;
```
---

### 字符串
#### 字符串的输出
1. echo;
2. var_dump();
3. print();
4. die();
5. exit();
6. printf();
7. sprintf();
8. print_r();

---

### 常用用字符串格式化函数
1. 去除空格和字符串填补函数
   * rtrim();       去除右侧字符串空格
   * ltrim();       去除左侧字符串空格
   * trim();        去除字符串两侧空格
   * str_pad();     把字符串补充到一定长度
   * str_repeat();  字符串重复出现多少次
2. 字符串大小写转换函数
   * strtolower();  所有字母小写
   * strtoupper();  所有字母大写
   * ucfirst();     首字母大写
   * ucwords();     每个单词首字母大写
3. 与HTML标签相关联的字符串函数：
   * nl2br();                   nl(回车换行)转换为<br /> 方便了浏览器识别
   * htmlspecialchars();        将html标签转为实体
   * htmlspecialchars_decode(); 将html标签实体转为可识别的标签
   * strip_tags();              过滤html标签
   * addslashes();              将单引号和双引号添加反斜线(转义)
   * stripslashes();            将字符串中的反斜线去除


### 其他字符串格式化函数
1. strrev();        字符串翻转
2. strlen();        字符串长度
3. number_format(); 货币格式化
4. md5(); md5加密
5. str_shuffle();   打乱字符串

### 字符串的分割与拼接
1. explode(); 将字符串分割成数组
2. implode();  将数组分割成字符串
3. join();     将数组分割成字符串

### 字符串的截取：
1. substr(); 截取字符串

### 字符串查找
1. strpos(); 查找一个字符在子字符串中出现的位置
2. strrpos(); 查找一个字符在子字符串中最后出现的位置

### 字符串的替换
1. str_replace(); 字符串替换

### 支持多字节文字
1. mb_substr(); 

### 其他常用的字符串函数
1. pathinfo();
2. basename();
3. dirname();
4. parse_url(); 解析url
5. parse_str(); 解析url后面的查询部分

---

### 补充
1. isset(); 判断一个变量是否存在
2. unset(); 释放变量(删除变量释放内存)
3. empty(); 判断一个变量是否为空

---

### 正则表达式
特殊字符  
\d 任意一个数字  
\D 任意一个非数字  
\s 空格  
\S 非空格  
\w 任意一个字母、数字或下划线  
\W 任意一个非字母、数字或下划线  

元字符   
*任意多个字符(0个或多个)  
+任意多个字符(1个或多个)  
？匹配个字符(0个或1个)  
| 或者  
^ 以什么开头  
$ 以什么结尾  
\b 单词边界
\B 非单词边界
[^] 取非
{} 多上个前面的原子
() 单元匹配

---

### 正则函数
preg_match()      匹配一次
preg_match_all($pth,$str,$arr)  匹配多次
preg_grep($pth, $arr);  数组搜索      
preg_replace($pth,$arr)  替换
preg_split() 分割

---

### 数学、日期和错误处理
1. 数学函数
    * max();
    * min();
    * round();
    * ceil();
    * floor();
    * mt_rand(); 随机数(n~m)

2. 错误处理
    * 提示 E_NOTICE  echo $str;
    * 警告 E_WARING  echo substr();
    * 致命 E_ERROR   echo sub_str();
    * 语法 E_PARSE   echo 'aaaa'不加分号
    * 所有 E_ALL
3. 控制错误
    * error_reporting = E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED  
    报所有错误提示 除了提示错误、严格和丢弃错误

4. 日期函数
    * time() 时间戳
    * date.timezone = PRC  php.ini配置文件修改时区 
    * date()    时间戳转日期
    * strtotime()   日期转时间戳
    * microtime  获取微妙数

>  润年的定义  
    1. 只能被4整除  
    2. 同时如果能被100整除，则必须被400整除

### PHP GD函数库：
1. 处理图片
2. 画图

### 处理图片 
1. 验证码
2. 缩略图
3. 图片裁剪
4. 图片水印

### php中创建图像的5个步骤
1. 创建画布资源 
```
$img = imagecreatetruecolor(500,300); /* 画布宽 画布高*/
```
2. 准备颜色
```
$w = imagecolorallocate($img,255,255,255);
$b = imagecolorallocate($img,0,0,255);
```
3. 在画布上画图像或文字
imagefill($img,0,0,$b);
4. 输出最终图像或保存最终图像
imagejpeg($img,'01.jpg') ;
5. 释放画布资源
imagedestroy($img);

### 图片输出到浏览器上：
header('content-type: image/jpeg);
header('content-type: image/png);
header('content-type: image/gif);


### 绘制图像
1. imagefill();             填充画布
2. imagesetpixel();         画一个像素
3. imagerectangle();        画一个矩形
4. imagefilledrectangle();  画一个矩形并填充
6. imagepolygon();          画一个多边形
7. imagefilledpolygon();    画一个多边形并填充
8. imageellipse();          画一个椭圆
9. imagefilledllipse();     画一个椭圆并填充
10. imagearc();             画一个椭圆弧

---

图像缩放函数
~~~ 
<?php
    /*
        @param $img 图片
        @param $dstx 图片宽
        @param $dsty 图片高
        @param $pre 图片名称
    */

    function thumb($img,$dstx,$dsty,$pre){
        // 获取原图信息
        $arr = getimagesize($img);
        $srcx = $arr[0];
        $srcy = $arr[1];
        $srctype = $arr[2];
        // 判断图片类型
        switch($srctype){
            case 1:
                $imgfrom = 'imagecreatefromgif';
                $imgout = 'imagegif';
            break;
            case 2:
                $imgfrom = 'imagecreatefromjpeg';
                $imgout = 'imagejpeg';
            break;
            case 3:
                $imgfrom = 'imagecreatefrompng';
                $imgout = 'imagepng';
            break;
        }

        // 图片资源
        $srcimg = $imgfrom($img);

        // 等比缩放算法
        $scale = max($srcx/$dstx,$srcy/$dsty);
        $dstx = floor($srcx / $scale);
        $dsty = floor($srcy / $scale);

        // 目标资源
        $dstimg = imagecreatetruecolor($dstx,$dsty);
        // 图片缩放
        imagecopyresampled($dstimg,$srcimg,0,0,0,0,$dstx,$dsty,$srcx,$srcy);

        // 保存路径
        $dir = dirname($img);
        $file = basename($img);
        $dstfile = $dir.'/'.$pre.$file;
        // 保存图片
        $imgout($dstimg,$dstfile);

        // 关闭画布资源
        imagedestroy($srcimg);
        imagedestroy($dstimg);
    }
?>
~~~

---

文件基本操作
1. filetype();    测试文件类型
2. is_dir();      判断目录
3. is_file();     判断文件
4. file_exists(); 判断目录或文件是否存在
5. filesize();    文件大小

---

文件操作
1. fread();     读取文件
2. fwrite();    写入文件
3. fwrite();    追加写入文件
4. copy();      文件复制
5. rename();    重命名  
6. fclose($fp); 关闭文件
7. fopen($file,'r'); fopen($file,'w'); fopen($file,'a');  创建文件
8. unlink(filename,[context]) 删除文件

---

目录操作
1. opendir(); 打开目录
2. readdir();  读取目录