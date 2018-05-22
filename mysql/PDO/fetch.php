<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");

$query = "select sku,title from products order by title";

$stmt = $dbh->query($query);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	$sku = $row['sku'];
	$title = $row['title'];

	printf("Product: %s (%s) <br/>", $title, $sku);
}
