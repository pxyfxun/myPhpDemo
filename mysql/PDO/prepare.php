<?php
$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");

$query = "insert into products (sku,title)values(:sku ,:title)";

//准备语句
$stmt = $dbh->prepare($query);

//执行查询
$stmt->execute(array(':sku' => 'MN873213', ':title' => 'Minty Mouthwash'));

//再次执行
$stmt->execute(array(':sku' => 'AB223234', ':title' => 'Lovable Lipstick'));
