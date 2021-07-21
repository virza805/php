<?php
$heredoc = <<<EOD
<h1>6.1 - Different ways to write strings in PHP</h1>
<p>৬.১ - পিএইচপিতে বিভিন্নভাবে স্ট্রিং লেখার পদ্ধতি</p>
EOD;
echo $heredoc.PHP_EOL;
echo "### ASCII = American Standard Code For Information Interchange ###".PHP_EOL; // https://en.wikipedia.org/wiki/ASCII
$string = "Hello World";
// echo $string[0];
// echo $string[-5];
echo substr($string, -7);
echo PHP_EOL;
echo strrev($string);
echo PHP_EOL."==string to array==".PHP_EOL;
$string = "Hello World, World How are You";
$parts = explode(" ",$string); // string to array
print_r($parts);
echo PHP_EOL."== array to string==".PHP_EOL;
// $original = implode(" ", $parts); // array to string
$original = join(" ", $parts); // array to string same function
echo $original;

$prarts2 = str_split($string); // akta akta carachakter 
print_r($prarts2);

echo PHP_EOL."==Break of Multipuel delimiter==".PHP_EOL;

$parts3 = strtok($string, " ,");
while ($parts3 !== false) {
    echo $parts3.PHP_EOL;
    $parts3 = strtok(" ,");
}
print_r($parts3);
echo PHP_EOL."==to know how meny words==".PHP_EOL;
$parts5 = preg_split("/ |,/", $string);
print_r($parts5);
echo PHP_EOL."==৬.১০ - নিউলাইন ক্যরেক্টার কে এইচটিএমএল লাইন ব্রেকে রুপান্তর করা = nl2br==".PHP_EOL;

$dumeText = "The name of our country is Bangladesh.\n Our main enemy is India.\n So we want to get rid of the aggression of India.\n I hate India also Indian culture. ";
echo nl2br($dumeText);


echo PHP_EOL."==৬.১১ - sscanf ফাংশনের ব্যবহার==".PHP_EOL;
$name = "Tanvir Hasan 01795815660 01mdalamin1@gmail.com";
$parts = sscanf($name, "%s %s %11s %s");
print_r($parts);
sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);
echo $email.PHP_EOL;

$hexColor = "#FF2F44";
 sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
 echo $red;

