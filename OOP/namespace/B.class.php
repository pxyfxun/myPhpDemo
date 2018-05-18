<?php
namespace P\WEB;
include 'A.class.php';

/**
 *
 */
class B {

	function b() {
		$a = new \P\BLL\A(); //不使用use 直接使用命名空间的全名
		$a->a();
	}
}

$b = new B();
$b->b();
