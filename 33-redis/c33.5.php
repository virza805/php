<?php 
require "vendor/autoload.php";
$redis = new Predis\Client(); 

// $redis->rpush('chatroom','Tanvir: Hello');

// $redis->lpop('chatroom');
$length = $redis->llen('chatroom');
print_r($redis->lrange('chatroom', 0, $length));



