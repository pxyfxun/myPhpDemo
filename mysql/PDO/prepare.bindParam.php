<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", 'root', '1234');

$query = 'insert into products(sku,title)values(:sku,:title)';

$stmt = $dbh->prepare($query);

$sku = 'MN873213';
$title = 'Minty Mouthwash';

//绑定参数
$stmt->bindParam(':sku', $sku);
$stmt->bindParam(':title', $title);

//执行查询
$stmt->execute();

$sku = 'AB223234';
$title = 'Lovable Lipstick';

//绑定参数
$stmt->bindParam(':sku', $sku);
$stmt->bindParam(':title', $title);

//再次执行
$stmt->execute();
