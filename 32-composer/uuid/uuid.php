<?php  
require "vendor/autoload.php";
use Ramsey\Uuid\Uuid; // run this commend => composer require predis/predis

// $uuid = Uuid::uuid4(); // === end 1st 

// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );

// echo Uuid::fromDateTime(new DateTime());  // === end 2nd
# ac8763e4-3358-11ec-9a33-00e0292cd3aa
# b8d87ab6-3358-11ec-b6a7-00e0292cd3aa
# 48235b00-3363-11ec-aca3-00e0292cd3aa

// $redis = new Predis\Client();  // === end 3rd || Start server => php -S localhost:8080
// echo $redis->ping();
