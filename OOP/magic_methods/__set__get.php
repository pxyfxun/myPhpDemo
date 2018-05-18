<?php

/**
 * 使用"不可访问属性（inaccessible properties）"和"不可访问方法（inaccessible methods）"来称呼这些未定义或不可见的类属性或方法。
 */

class A {
	private $name;

	function __set($name, $value) {
		echo "不可访问的属性:{$name}，你都要赋值:{$value}，搞事情啊~";
	}

	function __get($name) {
		echo "不可访问的属性:{$name}，你都要访问，搞事情啊~";
	}

	function __isset($name) {
		echo "不可访问的属性:{$name}，你都要isset()，搞事情啊~";
	}

	function __unset($name) {
		echo "不可访问的属性:{$name}，你都要unset()，搞事情啊~";
	}

}

$obj = new A();

//$obj->name = '小明'; //调用__set方法

//echo $obj->name; //调用__get方法

//isset($obj->name);

unset($obj->name);
