<?php

/*短小精悍*/
function rexplode($delimiter, $str){
	$d_len = strlen($delimiter);
	$arr = array();
	$i = $pos = 0; 
	while (false !== ($pos = stripos($str.$delimiter, $delimiter, $pos)) ) {
		$arr[] = mb_substr($str, $i, $pos-$i);
		$i = $pos + $d_len;
		$pos += $d_len;
	}
	return array_filter($arr);
}

var_dump(rexplode(',',"123,456,789"));