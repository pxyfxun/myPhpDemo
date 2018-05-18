<?php
$mysqli = new mysqli('localhost', 'root', '1234', 'shop');
$query1 = " update sw_goods set goods_name='坚果手机plus' where goods_id=118 ";
$query2 = "insert into sw_goods (goods_name,goods_price,xx)values('锤子手机',1888)";

$mysqli->autocommit(false); //关闭自动提交功能，等commit()时才提交

$result1 = $mysqli->query($query1);
$rows1 = $mysqli->affected_rows;

$result2 = $mysqli->query($query2);
$rows2 = $mysqli->affected_rows;

if ($result1 && $rows1 > 0 && $result2 && $rows2 > 0) {
	$mysqli->commit(); //提交
	echo 'ok';
} else {
	$mysqli->rollback(); //回滚
	echo 'failed';
}

$mysqli->autocommit(TRUE);
$mysqli->close();
