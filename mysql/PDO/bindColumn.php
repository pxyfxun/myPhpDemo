<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");
$query = "select sku ,title from products order by title";
$stmt = $dbh->prepare($query);
$stmt->execute();

//用列的偏移来绑定（从1开始，而不是从0）
$stmt->bindColumn(1, $sku);

//用列名来绑定
$stmt->bindColumn('title', $title);

while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
	$data = $sku . "--" . $title;
	echo $data . "<br/>";
}
