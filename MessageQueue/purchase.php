<?php
/**
 * Created by PhpStorm.
 * User: zjf
 * Date: 2018/8/16
 * Time: 11:09
 */

/**
 * [init_redis description]
 * @return [type] [description]
 */
function init_redis() {
	$redis = new Redis();
	$redis->connect('127.0.0.1', 6379);
	return $redis;
}

function judge_purchase_result() {
    $redis=init_redis();
	$count = $redis->lPop('iphone-x');
	if ($count) {
		//抢到
		$result = TRUE;
	} else {
		$result = FALSE;
	}
	return $result;
}

$redis=init_redis();

if (judge_purchase_result()) {
	//1.数据库减少库存
	//2.生成订单
	echo '恭喜您，抢到了';
	echo "<br/>";
	echo "剩余商品：{$redis->lLen('iphone-x')}";
} else {
	echo '抱歉，商品已卖完';
}
