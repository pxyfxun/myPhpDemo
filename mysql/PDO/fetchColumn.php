<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");

$query = "select sku,title from products order by title ";

$stmt = $dbh->query($query);

while ($col = $stmt->fetchColumn(1)) {
//fetchColumn()执行后会自动把指针移动到下一行；所以无法通过该函数获取同一行的不同列
	printf("Product: %s <br/>", $col);
}
