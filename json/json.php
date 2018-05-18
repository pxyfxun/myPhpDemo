<?php

class A {
	public $num;
	public $name;

	function __construct($_num, $_name) {
		$this->num = $_num;
		$this->name = $_name;
	}
}

$class = new A('A001', '张三');

//json_encode序列化
$json = json_encode($class, JSON_UNESCAPED_UNICODE); //加上JSON_UNESCAPED_UNICODE，否则显示的是ASCII码
echo $json;
