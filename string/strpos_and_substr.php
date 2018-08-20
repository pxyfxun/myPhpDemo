<?php

$str = "I can fly I can touch the sky";
$needle = "touch the sky";
$pos = strpos($str, $needle);
if ($pos === false) {
	echo "nothing found";
} else {
	echo "位置是 {$pos} ";
}
echo "<br/>";
echo substr($str, $pos);
