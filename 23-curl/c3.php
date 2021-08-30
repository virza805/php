<?php

set_time_limit(0); // php lode time | https://images.unsplash.com/photo-1601621098321-2db2256adef7 || https://images.unsplash.com/photo-1618297358013-d3cb3e23ce25
$ch = curl_init('https://images.unsplash.com/photo-1601621098321-2db2256adef7'); 
$filename = fopen("image2.jpg","w");
curl_setopt($ch, CURLOPT_FILE, $filename);
curl_exec($ch);

