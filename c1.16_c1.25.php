<?php  
// Switch Case as like if elseif condition 
$n = 12;
$r = $n % 2;

switch ($r){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an odd number \n";
}

$color = 'black';
switch($color){
    case 'red':
        echo "Red is our favorite color";
        break;
    case 'green':
        echo "Green is our favorite color";
        break;
    case 'blue':
        echo "Blue is our favorite color";
        break;
    default:
    echo "This color is ok";
}
echo "\n";
//same function ta short from | ucwords() Capitalizes the first letter of any word for use this function

$color = 'red';
switch($color){
    case 'red':
    case 'green':
        echo ucwords($color)." is our favorite color";
        break;
    case 'blue':
        echo "Blue is not our favorite color";
        break;
    default:
    echo "This color is ok";
}
echo "\n";
//Same  function if('red' == $color || 'green' == $color){}
// nesting Switch Case
$na = 15;
$ra = $n % 2;

switch ($ra){
    case 0:
        switch ($na) {
            case $na>0:
                echo "{$na} is a positive even number \n";
                break;
            case $na<0:
                echo "{$na} is a negative even number \n";
                break;  
        }
        break; 
    default:
    switch ($na) {
        case $na>0:
            echo "{$na} is a positive odd number \n";
            break;
        case $na<0:
            echo "{$na} is a negative odd number \n";
            break;  
    }
       

}
echo "\n";
//same function ta short from | switch (true){} whatever we wont ot print this 

switch (true) {
    case ($ra == 0 && $na > 0):
        echo "{$na} is a positive even number \n";
        break;
    case ($ra == 1 && $na > 0):
        echo "{$na} is a positive odd number \n";
        break;
    case ($ra == 0 && $na < 0):
        echo "{$na} is a negative even number \n";
        break;
    case ($ra == -1 && $na < 0):
        echo "{$na} is a negative odd number \n";
        break;       
}
echo "\n";
// Loop er use
// For Loop
echo PHP_EOL."Multiple loop 1".PHP_EOL;
for($i = 1; $i<=10; $i+=2){ // for odd number 1-10 
    //echo $i;
    echo $i.":".(10-$i);
    echo PHP_EOL;
}
echo PHP_EOL."Multiple loop".PHP_EOL;
for($i=10, $j=1; $i>0; $i-=1,$j+=1){ // Multiple loop 
   
    echo $i.":".$j;
    echo PHP_EOL;
}
echo PHP_EOL;
//For Loop er Vatora loop
for($i = 1; $i<10; $i++){
    //echo $i;
    echo PHP_EOL;
    for($j = 0; $j<$i; $j++){
        echo "*";
    }
}
echo PHP_EOL."While loop".PHP_EOL;
// while loop
$a=0;
while ($a <= 10) {
    $a+=1;
    echo $a.PHP_EOL;
}
echo PHP_EOL."Do While loop".PHP_EOL;
$i = 0 ;
do{
    $i+=1;
    echo $i.PHP_EOL;
}while ($i <= 5);

echo PHP_EOL."Go To loop".PHP_EOL;
$i=0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;
// for loop Factorial barko
echo PHP_EOL."for loop Factorial barkora".PHP_EOL;
$number = 6;
for ($i=$number, $factorial=1; $i > 1; $i--) { 
    // $factorial = $factorial * $i;
    $factorial *= $i;
}
printf("Factorial of %d is %d", $number, $factorial);
