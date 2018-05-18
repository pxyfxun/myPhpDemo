<?php

$memcache = new Memcache;

$memcache->connect('127.0.0.1',11211);

$memcache->add('uname','仗剑走天涯',0,20);

$value=$memcache->get('uname');

echo $value;

