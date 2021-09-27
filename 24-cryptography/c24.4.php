<?php  
// keyd hash = mac = message authintication code

// Hashing
$secretPassword = "wow";
$message = "This is changed secret message";
$hash = md5($message.$secretPassword);
echo $hash.PHP_EOL;

// Hashing
$secretPassword = "wow";
$message = "This is changed secret message";
$hash = mhash(MHASH_SHA512,$message,$secretPassword);
echo bin2hex($hash);

