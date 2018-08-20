<?php

/**
 * array_map的回调函数：
 * 1.只接受数组的【值】，而不接受键
 * 2.必须return
 */
function func($v) {

	return $v * $v;

}

$arr = [1, 2, 3, 4];

/**
 * array_map会产生一个新数组，但是不改变原数组。重点在于“改造”数组中的每个值，不会剔除数组中的元素
 * 注意区别于array_walk(),array_fliter()
 */
$result = array_map('func', $arr);

print_r($arr);
print_r($result);
