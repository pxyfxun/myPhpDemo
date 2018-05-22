<?php
$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");
$query = "select sku,title from products order by title ";

$stmt = $dbh->query($query);
$result = $stmt->fetchAll();

print_r($result);
