<?php
/**
 * __sleep()
 */

class Person {

	public $pid;
	public $name;

	public function __construct($pid, $name) {
		$this->pid = $pid;
		$this->name = $name;
	}

//serialize()时调用
	public function __sleep() {
		return array('name');
	}

//unserialize()时调用
	public function __wakeup() {
		$this->pid = uniqid();
	}
}

$obj = new Person(22, '小明');
$s = serialize($obj);
var_dump($s);

var_dump(unserialize($s));
