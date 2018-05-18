<?php
$mysqli = new mysqli('localhost', 'root', '1234');

$mysqli->select_db('shop');

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

// $query = "insert into test_class(name,msg) values ('1050412','最好的年华，最美的青春')";

// $query = "update test_class  set msg='最好的年华，最美的青春,最灿烂的自己' where name='1050412';";

// $result = $mysqli->query($query);

// var_dump($result);

// $query = "insert into test_class(name,msg) values (?,?)";

// $name = '测试信息1';
// $msg = 'ceshi 备注';

// $stmt = $mysqli->prepare($query);
// $stmt->bind_param('ss', $name, $msg);
// $stmt->execute();
// echo $stmt->affected_rows;
// $stmt->close();

// $query = 'select * from test_class';

// $result = $mysqli->query($query);

// var_dump($result->fetch_all());

$query = "select cat_id as id,cat_name as name,parent_id as parent_id from sw_category order by sort_order asc ";
$result = $mysqli->query($query);
// var_dump($result);

while ($row = $result->fetch_assoc()) {
	var_dump($row);
}
