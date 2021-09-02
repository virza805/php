<?php
$ch = curl_init('https://vir-za.com/wp-content/uploads/2020/10/tanvir-.png');
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_exec($ch);
$info = curl_getinfo($ch);
print_r($info);

$headers = get_headers('https://vir-za.com/wp-content/uploads/2020/10/tanvir-.png');
print_r($headers);


