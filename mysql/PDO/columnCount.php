<?php

$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");

$query = "select sku,title from products order by title";

$result = $dbh->query($query);
//获取列数
printf("there were %d product fields retrurned.", $result->columnCount());
