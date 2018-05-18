<?php
session_start();

$_SESSION['position'] = 'php-develop';

echo session_id();

var_dump($_COOKIE);
