<?php  
$text = "Quick Brown fox jumps over the lazy dog";
$encoded = base64_encode($text);
echo $encoded.PHP_EOL;
echo base64_decode($encoded);





