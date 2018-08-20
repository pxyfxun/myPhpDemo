<?php

function my_explode($split,$str){
    if($pos=strpos($str,$split)!==false){//如果存在
        return _my_explode($split,$str);
    }else{
        return array($str);
    }
}

function _my_explode($split,$str){

    $arr_position=array();//记录字符串中，截取符号的位置
    $str=trim($str,$split);
    for ($i=0;$i<strlen($str);$i++){
        if ($split===$str[$i]){
            $arr_position[]=$i;
        }
    }
    $arr_position[]=strlen($str);
    $arr_result=array();//结果

    for ($i=0;$i<count($arr_position);$i++){
        if ($i==0){
            $start=0;
            $length=$arr_position[$i];
        }else{
            $start=$arr_position[$i-1]+1;
            $length=$arr_position[$i]-$arr_position[$i-1]-1;
        }
        $arr_result[]=substr($str,$start,$length);
    }

    return $arr_result;
}

var_dump(my_explode(',',"123www,456,789"));