<?php

/**
 * array_walk的回调函数：
 * 1.同时接收数组的值和键，第一个参数为值，第二个参数为键
 * 2.如果想改变数组的值，就必须以&引用的方式传递值参数
 */
function print_item(&$v, $k) {
	echo "$v--$k";
	echo "<br>";
	$v = 1;
}

$arr = array('a' => 'xm', 'b' => 'xl', 'c' => 'wh');

/**
 * array_walk 使用用户自定义函数，遍历并处理数组每一项
 * 1.有意思的是：回调函数并不用return，如果想改变数组中的值，只能通过&方式传递引用参数，以修改数组的值
 * 2.注意区别于array_map,array_map()会产生一个新数组
 */
array_walk($arr, 'print_item');

var_dump($arr);
