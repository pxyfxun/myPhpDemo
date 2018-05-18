<?php

# memcache扩展定义好的memcache，session存储处理器
ini_set('session.save_handler', 'memcache');

# 所使用的memcache服务器信息。多个memcache，用分号隔开
ini_set('session.save_path', 'tcp://127.0.0.1:11211');

session_start();
$sid = session_id();
echo "sid:{$sid}";
echo "<br>";
$memcache_obj = memcache_connect('127.0.0.1', 11211);
$memcache_obj->add('var_key', 'test variable', false, 30);

var_dump($memcache_obj->get('var_key'));

$str = $memcache_obj->get($sid);

var_dump($str);

var_dump(session_decode($str));

var_dump($str);
