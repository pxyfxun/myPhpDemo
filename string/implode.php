<?php
$arr = array("苹果", "李子", "桃子", "香蕉");

$str = join($arr, ",");
echo $str;

$str1 = implode($arr, ",");

echo $str1;
