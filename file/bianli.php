<?php
/**
 * 遍历一个文件夹下的所有文件和子文件夹
 */

traverse_files('D:\aphpweb\testdemo\file');

/**
 * 自定义遍历函数
 * @param  需要被遍历的目录
 * @return void
 */
function traverse_files($dir = '.') {

	if ($handle = opendir($dir)) {
		while (($file = readdir($handle)) !== false) {
			if ($file == '.' || $file == '..') {
				continue;
			}
			if (is_dir($sub = realpath($dir . '/' . $file))) {
//是个目录
				// if (is_dir($sub = realpath( $file))) {
				echo "子文件夹：{$sub},上级文件夹：{$dir}<br>";
				traverse_files($sub);
			} else {
//是个文件
				echo "文件夹：{$dir},文件：{$file} <br>";
			}
		}
	}

	closedir($handle);

}
