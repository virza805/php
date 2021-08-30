<?php
// https://github.com/sunra/php-simple-html-dom-parser

// 23.6
$word = "Benevolent";
$endpoint = "https://www.vocabulary.com/dictionary/definition.ajax?search={$word}&lang=en&format=json";

echo "<h1>Meaning of {$word}</h1>";
$ch = curl_init($endpoint);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);


echo "<strong>Short Meaning</strong> : {$short}<br/>";

$long_start = strpos($result, '<p class="long">')+16;
$long_end = strpos($result, '</p>', $long_start);
$long = substr($result, $long_start, ($long_end-$long_start));
echo "<strong>Long Meaning</strong> : {$long}<br/>";


