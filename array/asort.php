<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

//asort 按照值升序排序，保留原始键
asort($fruits);
// foreach ($fruits as $key => $val) {
// 	echo "$key = $val\n";
// }
var_dump($fruits);

//sort 按值升序排序，但是不保留原始键，索引由0开始
sort($fruits);
var_dump($fruits);
