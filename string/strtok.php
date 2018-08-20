<?php

$info = "J, Gilmore:jason@example.com|Columbus, Ohio";

//定界符摆阔冒号（：）、竖线（|）、逗号（,）
$tokens = ":|,";
$tokenized = strtok($info, $tokens);

//打印输出$tokenized数组的每个元素
while ($tokenized) {
	echo "Element={$tokenized} <br/>";
	//在后续调用中不要包含第一个参数
	$tokenized = strtok($tokens);
}
