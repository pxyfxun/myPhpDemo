<?php

class A {
	function __invoke($x) {
		echo "你想以函数的方式调用我？还给我穿了个参数 $x";
	}
}

$obj = new A();

$obj(3);

var_dump(is_callable($obj));
