<?php

class Singleton {
	static private $instance;

	private function __construct() {
		echo ('搞事情？');
	}

	private function __clone() {}

	static public function getInstance() {
		if (!(self::$instance instanceof self)) {
			self::$instance = new self();
		}

		return self::$instance;
	}
}

$obj = Singleton::getInstance();
