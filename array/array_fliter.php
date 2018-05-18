<?php
function func($v) {

	return ($v & 1);

}

$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7);

/**
 * array_filter会产生一个新函数，但是不改变原函数。重点在于通过函数“过滤”掉一些不符合的值
 * 注意区别于array_map
 */
$result = array_filter($arr, 'func');

print_r($arr);
print_r($result);
