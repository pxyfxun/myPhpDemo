<?php
# memcache扩展定义好的memcache，session存储处理器
ini_set('session.save_handler', 'memcache');

# 所使用的memcache服务器信息。多个memcache，用分号隔开
ini_set('session.save_path', 'tcp://127.0.0.1:11211');

session_start();

$_SESSION['position'] = 'php-develop';

echo session_id();

var_dump($_COOKIE);
