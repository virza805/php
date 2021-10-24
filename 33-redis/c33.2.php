<?php
// ৩৩ - রেডিস = Redis # redis-cli
// https://github.com/microsoftarchive/redis/releases/tag/win-3.2.100


require "vendor/autoload.php";
//use Ramsey\Uuid\Uuid; // run this commend => composer require predis/predis

$redis = new Predis\Client();  // === end 3rd || Start server => php -S localhost:8080
// echo $redis->ping();

// $redis->set("key", 10);
// $redis->expire("key", 30); 
// $redis->set("key", 10, "EX", 10); // ১২ ও ১৩ বিকল্প
// $redis->del("key");

// echo $redis->get("key");

$redis->set("user1",json_encode(['name'=>'Tanvir Onamica','email'=>'1tanvirmdalamin@gmail.com']));

// echo $redis->get("user1"); // encode result 
print_r(json_decode($redis->get("user1"), true)); // decode result


