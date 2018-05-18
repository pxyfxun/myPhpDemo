<?php

/**
 * 0.定义接口
 */
interface Interface_1 {
	public function foo();
}

/**
 *1.1 定义类，实现接口Interface_1
 */
class Class_1 implements Interface_1 {
	function foo() {
		$class_name = __CLASS__;
		echo "我是{$class_name},我实现了接口Interface_1";
	}
}

/**
 *1.2 定义类，实现接口Interface_1
 */
class Class_2 implements Interface_1 {
	function foo() {
		$class_name = __CLASS__;
		echo "我是{$class_name},我实现了接口Interface_1";
	}
}

/**
 *实现依赖注入的类（构造函数注入）
 */
class Class_DI_Demo {

	public $interface_1;

	//构造函数注入.需要Interface_1的服务
	function __construct(Interface_1 $interface_1) {
		$this->interface_1 = $interface_1;
	}
}

$class1 = new Class_1();
$class2 = new Class_2();

//注入$class1
$class_DI_Demo = new Class_DI_Demo($class1);

$class_DI_Demo->interface_1->foo();

echo "<br>";

//注入$class2
$class_DI_Demo = new Class_DI_Demo($class2);

$class_DI_Demo->interface_1->foo();
