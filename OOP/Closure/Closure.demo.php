<?php

class LoaderClass {
	private $name;
	private $remark;

	private static function hello() {
		echo 'hello ';
	}
	// public $name;
	// public $remark;
	public function getName() {
		return $this->name;
	}

	public function getRemark() {
		return $this->remark;
	}
}

class InitClass {
	public static $name = 'zjf';
	public static $remark = 'handsome';

	public static function getInitializer(LoaderClass $loader) {
		return Closure::bind(function () use ($loader) {
			$loader->name = InitClass::$name;
			$loader->remark = InitClass::$remark;
			LoaderClass::hello();
			self::hello();
		}, null,
			//下面三种写法都正确
			// LoaderClass::class
			// new LoaderClass()
			'LoaderClass'
		);
	}
}

$loader = new LoaderClass();

call_user_func(InitClass::getInitializer($loader));

// $loader->name = '11';

echo $loader->getName();

echo ' is ';

echo $loader->getRemark();
