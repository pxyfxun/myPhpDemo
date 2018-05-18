<?php

$mysqli = new mysqli('localhost', 'root', '1234', 'shop');
$query = "select goods_id,goods_name from sw_goods where goods_name=? ";
$stmt = $mysqli->stmt_init(); //不直接用mysqli->query 是为了使用参数绑定。参数绑定可避免SQL注入
$stmt->prepare($query);
$name = '美图手机';
$stmt->bind_param('s', $name); //有参数的查询用绑定，可避免SQL注入
$stmt->execute();

$result = $stmt->get_result(); //mysqli_result(object)
var_dump($result);

var_dump($result->fetch_all());

$result->free(); //释放结果集所请求的内存。在获取庞大结果集时很有用。
$mysqli->close(); //关闭数据库
