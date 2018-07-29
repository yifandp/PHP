<?php
$arr = array_merge(range(0,9),range('a','z'),range('A','Z'));

shuffle($arr);

$arr2 = array_slice($arr,0,5);

$str = join('',$arr2);

echo $str.'<br />';

$str = "linux is very much";
echo strtolower($str).'<br/>';
echo strtoupper($str).'<br />';
echo ucfirst($str).'<br />';
echo ucwords($str).'<br />';
?>