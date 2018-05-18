<?php

$array1 = array('a' => 'yellow', 'b' => 'blue', 'c' => 'red');

$array2 = array('b' => 'yellow', 'c' => 'blue', 'a' => 'black', 'red');

var_dump(array_diff($array1, $array2));
