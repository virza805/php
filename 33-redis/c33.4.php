<?php 
require "vendor/autoload.php";
$redis = new Predis\Client(); 

$car = [
    'name' => 'Tavir',
    'build' => '2021',
    'company' => 'vir-za.com',
];
/*
$redis->hset('car1','name','Tavir'); 
$redis->hset('car1','build','2021'); 
$redis->hset('car1','company','vir-za.com'); 
*/
$redis->hmset('car01', $car); // all value insert

// echo $redis->hget('car1','name'); // one by one show
// echo $redis->hset('car1','name','Onamica'); // one by one update a fild
// echo $redis->hdel('car1','name'); // one by one delete a fild

// print_r($redis->hgetall('car1'));
// print_r($redis->hgetall('car01')); // show all
print_r($redis->hmget('car01', ['name','build'])); // show needed fild 