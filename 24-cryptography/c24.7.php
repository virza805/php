<?php 
// HMAC
$message = " This is a secret message";
$key = "MySecretPassword";
// print_r(hash_hmac_algos()); // check hash algos
echo hash_hmac("sha512", $message, $key);
