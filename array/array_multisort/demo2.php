<?php

$arr_times = array(
	array('1204:25:00', "36144"),
	array('1204:25:01', "49320"),
	array('0904:25:00', "52658"),
	array('1014:25:03', "11535"),
	array('1314:25:10', "22635"),
	array('0114:25:30', "55558"),

);

foreach ($arr_times as $items) {
	$arr_keys[] = $items[0];
}
array_multisort($arr_keys, SORT_ASC, SORT_STRING, $arr_times);

var_dump($arr_times);
