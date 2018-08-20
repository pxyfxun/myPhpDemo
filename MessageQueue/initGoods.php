<?php
/**
 * Created by PhpStorm.
 * User: zjf
 * Date: 2018/8/16
 * Time: 11:08
 */

$goods_num=10;
$redis=new Redis();
$redis->connect('127.0.0.1', 6379);

$goods_num_redis=$redis->lLen('iphone-x');
for ($i=$goods_num_redis;$i<$goods_num;$i++){
    $redis->lPush('iphone-x',1);
}

echo "商品初始化完毕，库存为: {$redis->lLen('iphone-x')}";
