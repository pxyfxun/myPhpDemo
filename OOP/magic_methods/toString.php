<?php

class A {
	function __toString() {
		return "我那你当朋友，你居然把我当成字符串？";
	}
}

$obj = new A();

echo $obj;
