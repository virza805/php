<?php 
require "vendor/autoload.php";
$redis = new Predis\Client(); 

// $redis->set("product_stock", 10);
// $redis->incr("product_stock"); // increase i++
// $redis->incrby("product_stock", 5); // increase 5

$redis->decr("product_stock"); // decrease i++
// $redis->decrby("product_stock", 5); // decrease 5

echo $redis->get("product_stock");

