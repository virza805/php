<?php  
$ch = curl_init('http://localhost/sphp/23-curl/hello.php');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$var = curl_exec($ch);
echo strtoupper($var);



