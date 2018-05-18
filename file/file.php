<?php

$path = 'D:\test\h\visitlist.txt';

// //返回路径中文件名部分
// var_dump(basename($path));

// //返回路径中的文件名部分，但不包含第二个参数的扩展名
// var_dump(basename($path, '.txt'));
// .

$path = " http://www.phpddt.com/abc/de/fg.php?id=1";

var_dump(basename($path));
