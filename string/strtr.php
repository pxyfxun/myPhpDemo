<?php
$table = "<b>Whatever is worth doing is worth doing well<b/>";

$arr = ["<b>" => "<strong>", "</b>" => "</strong>"];

echo strtr($table, $arr);
