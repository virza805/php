<?php  

for ($i = 0; $i < 100; $i+=1){
    // if ($i % 7 == 0) echo $i."\n";
    // if ($i % 11 == 0) echo $i."\n";
    echo $i % 7 == 0 ? $i."\n":'';
    echo $i % 11 == 0 ? $i."\n":'';
}
echo PHP_EOL."for er multipel use".PHP_EOL;
for ($i=0, $j=0; $i < 100 ; $i+=7, $j+= 11) { 
    echo $i."\n";
    echo $j<100 ? $j."\n":'';
}
echo PHP_EOL."Use of While loop".PHP_EOL;
$i=0;
while ($i < 5) {
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo "======\n";
$j=0;
while ($j++ < 5){ // 1st $j er manta while a jai then operation hoy
    echo $j;
    echo PHP_EOL;
}
echo "======\n";
$j=0;
while (++$j < 5){ // 1st $j operation hoy then While a jai
    echo $j;
    echo PHP_EOL;
}
echo PHP_EOL."Break in the middle of loop.".PHP_EOL;
//  for ($i=0; $i < 10 ; $i++) { 
//      echo $i.PHP_EOL;
//     if ($i==6) { // ai condition er pora ar jabana break korba
//         break;
//     }
//  }
 for ($i=20; $i < 50 ; $i++) { 
     
    if ($i % 13 == 0) { // Only show this condition result
        echo $i.PHP_EOL;
        break;
    }
 }
 echo "======\n";
 for ($i=20; $i < 30 ; $i++) { 
     
    if ($i < 27) { // Now start this condition result ata looper last a chola asba 
        continue;
    }
    echo $i.PHP_EOL;
 }
 echo "======\n";
 echo PHP_EOL."Fibonacci series".PHP_EOL;
$veryold = 0;
$old = 1;
$new = 1;

for($i=0; $i<10; $i++){
    echo $veryold." ";
    $old = $new;
    $new = $old + $veryold;
    $veryold = $old;
}
echo "======\n";
echo PHP_EOL."php7 spaceshap oparetor".PHP_EOL;
$x = 7;
$y = 6;
$result = $x <=> $y;

if ($result ==1){ // $x > $y =1
    echo "{$x} is greater than {$y}";
}elseif($result ==0){ // $x = $y = 0
    echo "{$x} is equal than {$y}";
}elseif($result == -1){ // $x < $y = -1
    echo "{$x} is smaller than {$y}";
}

echo "======\n";
echo PHP_EOL."php7 null coalesce operator".PHP_EOL;
$default_value = 23.9;

$user_input_value;
$nullCoalesce = $user_input_value ?? $default_value;
echo $nullCoalesce;
echo "\n======\n";
// same tarnnry Operator;
$nullCoalesce = isset($user_input_value) ? $user_input_value : $default_value;
echo $nullCoalesce;