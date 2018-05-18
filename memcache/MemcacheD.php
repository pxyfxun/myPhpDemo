<?php
/**
 * windpows没有memcached的dll所以会报错
 */
$memcacheD = new Memcached();

$memcacheD->addServer('127.0.0.1', 11211);

$memcacheD->set('uname', 'Bill', 60);

$value = $memcacheD->get('uname');

echo $value;
