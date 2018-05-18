<?php
/**
 * 单例模式
 * 懒汉模式。即用的时候才去创建（初始的时候没有创建）。所以“懒”
 */

class Singleton {
	static private $instance;

//私有化构造函数，使得不能在类的外部通过new来实例化
	private function __construct() {}

//防止克隆
	private function __clone() {}

	static public function getInstance() {
		//在类的内部调用静态属性记得用self::
		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	public function func() {
		echo 'sss';
	}
}

$obj = Singleton::getInstance();

$obj->func();
