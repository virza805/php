<?php  
// phpinfo();
// curl.haxx.se/docs/caextract.html
$ch = curl_init('https://vir-za.com/?v=fbd25224d617'); 
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);
$error = curl_error($ch);
if($error) {
    echo $error;
}

// 23.6


