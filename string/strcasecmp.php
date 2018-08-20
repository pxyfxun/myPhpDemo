<?php
$str1 = "jiafeng@123.com";
$str2 = "JIAFENG@123.com";

$result = strcasecmp($str1, $str2);

var_dump($result === 0);
