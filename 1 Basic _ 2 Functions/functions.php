<?php  

function factorial(int $n){ //php7
    // if(gettype($n) !="integer"){
    //     return "invalid";
    // }

    $result = 1;
    for ($i = $n; $i > 1; $i--){
        $result *= $i;
    }
    return $result;
}

function serve($foodType, $numberOfItems="1 cup"){
    echo "{$numberOfItems} of {$foodType} has/have been served";
}

// php function Unlimited parameter pass
// function sum($x, $y, int ...$numbers):int{} ## 1st a $x, $y, nilo  ... er por kono value nibana.
function sum($x, int ...$numbers):int{
    $result = 0;
    for ($i=0; $i < count($numbers) ; $i++) { 
        $result += $numbers[$i];
    }
    return $result;
}
// echo sum(5,1,2,3);
// recursive functions // recursion
function printNumber($counter, $end, $stepping=1){
    if($counter > $end){ // 1st break point deta hoba na hola infint loop a porajaba
        return;
    }
    echo $counter.PHP_EOL;
    $counter += $stepping;
    printNumber($counter, $end, $stepping);

}
// printNumber(20,26,2);
// Fibonacci series by recursive functions.
function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1; // null colase operator.

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new; // temoprail variabal 1st underscor "" dea start korta hoy
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}
echo PHP_EOL;
// fibonacci(0, 1, 10);
// Factorials by recursive functions.
function factorials($n){
    if($n <= 1){
        return 1;
    }
    return $n * factorials($n - 1);
}
echo factorials(3);