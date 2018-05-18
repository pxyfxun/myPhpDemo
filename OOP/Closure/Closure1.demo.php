<?php

class T {

	private static $name = '我是T里面的私有属性 $name <br>';

	private function show() {
		echo "我是T里面的私有函数：show <br>";
	}

	protected function who() {
		echo "我是T里面的保护函数：who <br>";
	}

	public function name() {
		echo "我是T里面的公共函数：name <br>";
	}
}

$test = new T();

$func = Closure::bind(function () {
	$this->who();
	$this->name();
	$this->show();

	echo self::$name; //访问静态私有成员
	echo static::$name; //访问静态私有成员
}, $test,
	T::class//加这个，指定匿名函数可以使用T这个类的作用域。下面两种方式都可以
	//'T'
	//new T()
);

$func();
