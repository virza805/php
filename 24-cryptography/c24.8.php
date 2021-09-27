<?php 
// Crypt 
/*
$message = "This is a secret message";
 $blowfish_salt = "$2y$10$". bin2hex(random_bytes(11));
//  $blowfish_salt = "$2y$10$". bin2hex(openssl_random_pseudo_bytes(11));

//  echo $blowfish_salt;
 echo crypt($message,$blowfish_salt);
*/

// php bilting hash function
$password = "Secret Password";
$hash = password_hash($password,PASSWORD_BCRYPT,['cost'=>11]); // Default cost time 10 cost time bashi time bashi password unique
echo $hash.PHP_EOL;

$userInput = "Secret Password";
if(password_verify($userInput, $hash)){
    echo "Authenticated";
}else{
    echo "Access Denied";
}


