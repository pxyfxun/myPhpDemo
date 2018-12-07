<?php

function bianli_file($dir='.'){
    if($handle=opendir($dir)){
        while(($file=readdir($handle))!==false){
            if($file=='.'||$file=='..'){
                continue;
            }elseif(is_dir($real_path=realpath($dir.'/'.$file))){//目录
                bianli_file($real_path);
            }else{//文件
                echo $file.'<br/>';
            }
        }
        closedir($handle);
    }
}
$path='D:\aphpweb\testdemo\file';
bianli_file($path);