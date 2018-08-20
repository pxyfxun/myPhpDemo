<?php
$password = "3312345";
$str = "1234567890";

//查找第一个字符串中的字符，在第二个字符串中第一次出现的子串的长度
$result = strspn($password, $str);

var_dump($result);

if (strspn($password, $str) == strlen($password)) {
	echo "密码只包含数字，危险";
}

$result = strspn($password, $str, 5, 3);

var_dump($result);
