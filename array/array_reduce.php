<?php

function sum($carry, $item) {
	$carry += $item;

	return $carry;
}

$array = array(1, 2, 3, 4, 5);

/**
 * array_reduce将一个数组迭代的使用一个函数，并返回一个结果
 * @var array
 */
$result = array_reduce($array, function ($v1, $v2) {
	return $v1 + $v2;
});

var_dump($result);
