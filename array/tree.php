<?php

//从数据库获取的分类数据(省略获取步骤)
//有“手机”和“电脑”两个大类
//--手机{三星Glaxy,IphoneX,华为荣耀}
//--电脑{Dell,Lenovo,IBM}

$data = array(

	array('id' => 5, 'name' => '电脑', 'parent_id' => 0),
	array('id' => 1, 'name' => '手机', 'parent_id' => 0),
	array('id' => 2, 'name' => '三星Glaxy', 'parent_id' => 1),
	array('id' => 3, 'name' => 'IphoneX', 'parent_id' => 1),
	array('id' => 4, 'name' => '华为荣耀', 'parent_id' => 1),
	array('id' => 6, 'name' => 'Dell', 'parent_id' => 5),
	array('id' => 7, 'name' => 'Lenovo', 'parent_id' => 5),
	array('id' => 8, 'name' => 'IBM', 'parent_id' => 5),
	array('id' => 9, 'name' => '外星人系列', 'parent_id' => 6),
	array('id' => 10, 'name' => '小新系列', 'parent_id' => 7),
	array('id' => 11, 'name' => 'ThinkPad系列', 'parent_id' => 8),
);

$data = get_data();
// var_dump($data);
$tree = get_tree($data, 0, 0);
// var_dump($tree);
echo_tree($tree);

/**
 * 递归获取结构树
 * @param  array $data  数据源
 * @param  integer $parent_id 父类id
 * @param  integer $level 深度
 * @return array 组装好的树
 */
function get_tree($data, $parent_id = 0, $level = 0) {
	static $tree = array();
	foreach ($data as $key => $row) {
		if ($row['parent_id'] == $parent_id) {
			$row['level'] = $level;
			$tree[] = $row;
			unset($data[$key]); //进入树结构后，接下里要查的就只是它的子类了，所以从$data中删除，减少后面查询次数
			get_tree($data, $row['id'], $level + 1);
		}
	}
	return $tree;
}

/**
 * 输出树结构
 * @param  array 数据源
 * @return void
 */
function echo_tree($tree) {
	foreach ($tree as $row) {
		for ($i = $row['level']; $i > 0; $i--) {
			echo '|----';
		}
		echo $row['name'];
		echo '<br>';
	}
}

function get_data() {
	$mysqli = new mysqli('localhost', 'root', '1234');
	$mysqli->select_db('shop');

	$query = "select cat_id as id,cat_name as name,parent_id as parent_id from sw_category order by sort_order asc ";
	$result = $mysqli->query($query);

	if ($result) {
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		/* free result set */
		$result->free();
	}
	/* close connection */
	$mysqli->close();
	return $data;
}
