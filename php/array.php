<?php
//$arr = array('html5','php','js','python');

// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// for($i=0; $i < count($arr); $i++){
//     echo $arr[$i];
// }

// print_r(each($arr1));
// Array
// (
//     [1] => html5
//     [value] => html5
//     [0] => item1
//     [key] => item1
// )

// while(list($key,$value) = each($arr)){
//     echo "<p>{$key} ---- {$value}</p>";
// };
// 0 ---- html5
// 1 ---- php
// 2 ---- js
// 3 ---- python

// foreach($arr as $key => $value){
//     echo "<p>{$key} ------ {$value}</p>";
// }

//print_r($_SERVER);
// echo count($arr); // 数组的长度4

/*
$arrAll = array(
    'item1' => 'html5',
    'item2' => 'php',
    'item3' => 'js',
    'item4' => 'python',
    'item5' => 'java'
);
// 取出数组中的value
function getVal($arr){
    foreach($arr as $key => $value){
        $rows[] = $value;
    }

    return $rows;
}
$row = getVal($arrAll);
print_r($row);

// 取出数组中的key
function getReversVal($arr){
    foreach($arr as $key => $value){
        $newArr[$value] = $key;
    }

    return $newArr;
}
$arrNew = getReversVal($arrAll);
print_r($arrNew)


// 求出数组中所有值的和
$arr = array(1,3,5,7,9);
$tot = 0;
foreach($arr as $key => $value){
    $tot += $value;
}
echo $tot; // 25


// 求出数组中所有值得乘积
$arr = array(1,3,5,7,9);
$tot = 1;
foreach($arr as $key => $value){
    $tot *= $value;
}
echo $tot; // 945

// 判断一个值在不在数组中
$arr = array(1,3,5,7,9);
function isNum($arr,$num){
    foreach($arr as $key => $value){
        if($value == $num){
            return true;
        }
    }
}
$n = 5;
$j = isNum($arr,$n);
var_dump($j);

*/
/*
// 元素个数
$arrAll = array(
    'item1' => 'html5',
    'item2' => 'php',
    'item3' => 'js',
    'item4' => 'python',
    'item5' => 'java'
);

print_r(count($arrAll));



// 数组值合并
$arr = array(
    'item1' => 'html',
    'item2' => 'css',
    'item3' => 'js'
);

$arr2 = array(
    'item4' => 'java',
    'item5' => 'php'
);

function getVal($arr,$arr2){
    foreach($arr as $key => $value){
        $row[$key] = $value;
    }
    foreach($arr2 as $key => $value){
        $row[$key] = $value;
    }
    return $row;
}

$n = getVal($arr,$arr2);
print_r($n);



// 数组键值合并
$arr = array('html5','python');
$arr2 = array('php','java');

function getVal($arr,$arr2){
    for($i = 0; $i < 2; $i++){
        $row[$arr[$i]] = $arr2[$i];
    }
    return $row;
} 

$n = getVal($arr,$arr2);
print_r($n);


// 过滤
$arr = array(0,1,2,3,4,5,6,7,8,9,10);
function getVal($arr){
    foreach($arr as $key => $value){
        if($value % 2 == 0){
            $row[] = $value;
        }
    }
    return $row;
}
$n = getVal($arr);
print_r($n);

$str = '123test';
$str1 = md5($str);
echo $str1.'<br />';

// $str3 = 1234567 ;
// echo number_format($str3);

// number_format() 函数的实现
$str3 = 34354555656;
function format($str){
    $strone = strrev($str);
    $strtwo = str_split($strone,3);
    $strtwo = join(',',$strtwo);
    $strthree = strrev($strtwo);
    return $strthree;
}
$str4 = format($str3);
echo $str4;

*/

// year month date hour minute second
// echo date('Y-m-d H:i:s',time());
$files = 'doc.md';
$str = file_get_contents($files);
echo $str;
?>