<?php

try {
	$dbh = new PDO('mysql:host=localhost;dbname=mydemodb', 'root', '1234');
} catch (PDOException $exception) {
	echo "Connection error:" . $exception->getMessage();
}

$query = "insert into product (id,sku,title)values(null,'SS873221','sssss')";

$dbh->exec($query);
// echo $dbh->errorCode();
print_r($dbh->errorInfo());
