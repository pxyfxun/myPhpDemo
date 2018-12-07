<?php
function ref_demo1(){
    $a="hi";
    $b=$a;

    //Windos+PHP7(windows7 PHP7.0.19 Apache2.4) 下 (refcount=2, is_ref=0) 
    //Linux+PHP7(Linux PHP7.1.7 Nginx1.12.2) 下 (refcount=0, is_ref=0) 
    xdebug_debug_zval('a');
}

function ref_demo2(){
    $a="hi".time();
    $b=$a;
    // $b=1;
    //Windos+PHP7(windows7 PHP7.0.19 Apache2.4) 下 (refcount=2, is_ref=0)
    //Linux+PHP7(Ubuntu 14.04.1 PHP7.1.7 Nginx1.12.2) 下 (refcount=2, is_ref=0)
    xdebug_debug_zval('a');
    
}

ref_demo2();