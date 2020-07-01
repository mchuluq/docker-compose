<?php

$redis = new Redis();
$redis->connect('redis', 6379);
$redis->auth('50m3_p455');

echo $redis->ping("test");