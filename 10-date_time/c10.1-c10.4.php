<?php 
// https://www.php.net/manual/en/function.date.php
date_default_timezone_set("Asia/Dhaka"); // for local timezone
echo date('l dS F Y h:i:s a');
echo PHP_EOL;
echo "Today ".date('z')." th day of the year"; // for Show day of the year 


echo PHP_EOL;

echo time();
echo PHP_EOL;
// Time start in 1-January-1970 12:00am (mine 00:00 ) this call "unix epoch"
// 1-January-1970 12:00am (mine 00:00 ) to Today total second [time()]  this call "unix timestamp"
echo PHP_EOL;
echo microtime(true); // this show micro second;

echo PHP_EOL."count this factorial() how much time to execution".PHP_EOL;
$startTime = microtime(true);
factorial(100);
// sleep(2); // for 2s frize 
$endTime = microtime(true);
$executionTime = $endTime - $startTime;
printf("%10.8f",$executionTime);

function factorial($n){
    $result = 1;
    for ($i=1; $i < $n; $i++) { 
        $result *= $i;
    }
    return $result;
}

// ===== Age calculator in php ### =====>
echo PHP_EOL."Age calculator".PHP_EOL;
$bday = new DateTime('17.12.1996'); // Your date of birth
$today = new Datetime(date('m.d.y'));
$diff = $today->diff($bday);
printf(' Your age : %d years, %d month, %d days', $diff->y, $diff->m, $diff->d);

echo PHP_EOL."Age calculator in php".PHP_EOL;
date_default_timezone_set("Asia/Dhaka"); // for local timezone
$b_day = mktime(0,0,0,12,17,1996); // hour,minute,second,month,day,year 
$to_day = mktime(0,0,0,7,24,2021); // hour,minute,second,month,day,year 
$total_second = $to_day - $b_day;
$total_minute = ($to_day - $b_day)/60;
$total_hour = ($to_day - $b_day)/(60*60);
$total_day = ($to_day - $b_day)/(24*60*60);
$total_month = $total_day / 30;
$total_year = $total_month / 12;

echo $total_year." Year ".$total_month;

// ===== Age calculator in php ### =====>
echo PHP_EOL."Age calculator".PHP_EOL;
$d1 = new DateTime('12:30:20 AM 17 Dec 1994'); // Your date of birth
$d2 = new Datetime('1:53:54 PM 24 July 2021');
$difference = date_diff($d1,$d2);
echo $difference->format('%y Year %m Month %d Days %h Hours %i minute %s Second');

echo PHP_EOL."Age calculator in php".PHP_EOL;