<?php

$redis = new Redis();
$redis->connect('47.96.128.98', 6379);
$redis->auth('123456');

$mysql = new mysqli("localhost","root","123456","mybatis");


?>