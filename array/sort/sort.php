<?php

/**
 * 冒泡排序和选择排序十分相似：
 * 相同点：1.两层for循环的for（）是一样的
 *         2.每趟比较完之后都会找到一个最大数
 * 不同点：冒泡排序每趟比较都会交换，而选择不会交换.
 *         因此，根本的不同点，是对怎么处理找出来的最大数的处理上
 */

/**
 * 冒泡排序
 * @param  [array] $arr [待排序数组]
 * @return [array]      [排序完成的数组]
 */
function bubble_sort($arr) {
	$length = count($arr);
	$count = $length - 1; //需要比较的趟数
	for ($i = 0; $i < $count; $i++) {
		for ($j = 0; $j < $count - $i; $j++) {
//$count - $i  每趟需要比较的次数
			if ($arr[$j] > $arr[$j + 1]) {
				$temp = $arr[$j + 1];
				$arr[$j + 1] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}

	return $arr;
}

/**
 * 选择排序
 * @param   [array] $arr [待排序数组]
 * @return [array]      [排序完成的数组]
 */
function selection_sort($arr) {
	$length = count($arr);
	$count = $length - 1; //需要比较的趟数
	for ($i = 0; $i < $count; $i++) {
		$pos = 0; //最大数的数组下标
		for ($j = 0; $j < $count - $i; $j++) {
			if ($arr[$pos] < $arr[$j + 1]) {
				$pos = $j + 1;
			}
		}
		$_j = $count - $i; //第$i趟比较后，最大数需要存放的数组下标
		$temp = $arr[$_j];
		$arr[$_j] = $arr[$pos];
		$arr[$pos] = $temp;
	}
	return $arr;
}

$arr = array(10, 2, 1, 6, 9, 3, 5, 8, 7, 4);

//$arr = bubble_sort($arr);

$arr = selection_sort($arr);
var_dump($arr);
