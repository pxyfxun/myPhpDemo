<?php
// we've writen this code where we need
function __autoload($classname) {
	$filename = "./" . $classname . ".php";
	include_once $filename;
}

// we've called a class ***
$obj = new myClass();
?>
