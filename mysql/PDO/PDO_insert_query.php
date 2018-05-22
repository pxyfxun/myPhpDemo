<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", 'root', '1234');
$query = "insert into cd(amount,remark)values(30000,'李明抵冲')";
// $affected = $dbh->exec($query);

// echo "total rows affected : $affected";

$query = "select sku,title from products order by id";
$result = $dbh->query($query);

//Return next row as an anonymous object with column names as properties
// while ($obj = $result->fetch(PDO::FETCH_OBJ)) {//查询结果为匿名类形式
// 	print $obj->title;
// 	print '<br>';
// }

//Return next row as an array indexed by column name
while ($r = $result->fetch(PDO::FETCH_ASSOC)) {
//查询结果为数组形式
	var_dump($r);
	echo "<br>";
}
