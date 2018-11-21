<?php
function a() {
	static $i = 1;
	$i++;
	echo $i;
}

a(); //2
a(); //3
a(); //4
a(); //5
