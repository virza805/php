<?php  
// Hash = uniqi এটা আগের অবস্থায় ফিরিয়ে আনা যায় না । 

// Encrypt = ‍এটা আগের অবস্থায় ফিরিয়ে আনা যায় ।

// openssl encrypt 

// print_r(openssl_get_cipher_methods());

// aes-128-ccm

$iv_length = openssl_cipher_iv_length('aes-128-cbc');
$iv = openssl_random_pseudo_bytes($iv_length);
// echo bin2hex($iv);

$message = "This is a secret message";
$password = "Secret Password";
$encryptedMessage = openssl_encrypt($message, 'aes-128-cbc',$password,0,$iv);
echo $encryptedMessage.PHP_EOL;

openssl_decrypt($message, 'aes-128-cbc',$password,0,$iv);


