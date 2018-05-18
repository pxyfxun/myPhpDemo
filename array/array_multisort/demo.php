<?php

$arr_times = array(
	array('2018-04-12 04:25:00', 36144, 14368),
	array('2018-04-12 04:25:01', 49320, 14368),
	array('2018-04-09 04:25:00', 52658, 14368),
	array('2018-04-10 14:25:03', 11535, 14368),
	array('2018-04-13 14:25:10', 22635, 14368),
	array('2018-04-01 14:25:30', 55558, 14368),

);

foreach ($arr_times as $items) { 
	$arr_keys[] = $items[0];
} 
array_multisort($arr_keys, SORT_ASC, $arr_times);

var_dump($arr_times);
