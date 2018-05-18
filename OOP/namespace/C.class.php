<?php
 
namespace P\WEB;
include 'A.class.php';

use P\BLL  as Bll;//use 要么use完整命名空间和类名；要么就只引用命名空间，但是要起别名

class C {
	function c() {
		$a=new Bll\A();
		$a->a();
	}
}

$c=new C();
$c->c();

