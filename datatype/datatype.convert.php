<?php

$model = 'zjf';
/*任何数据类型都可以转化为对象，结果是该变量成为了对象的一个属性，且属性名为scalar*/
$obj = (object) $model;
echo $obj->scalar;
