<?php

//事务
$dbh = new PDO("mysql:host=localhost;dbname=mydemodb", "root", "1234");
try {
	$dbh->beginTransaction();

	$query = "update productss set title='The puma at large' where ids=111";
	$rows = $dbh->exec($query);
	if ($rows && $row > 0) {
		$dbh->commit();
	} else {
		var_dump($rows);
		$dbh->rollBack();
	}
} catch (PDOException $ex) {
	$dbh->rollBack();
	echo $ex->getMessage();
}
