<?php  
include_once "functions.php";
$x=5;
echo "Factorial of {$x} is ".factorial($x);

echo PHP_EOL;
$ft = "Coffee";
$n = "4 Cups";
serve($ft,$n);

echo PHP_EOL;
echo sum(5,1,2,3);

// recursive function // recursion
echo PHP_EOL;
printNumber(20,26,3);
// Fibonacci series by recursive functions.
echo PHP_EOL;
fibonacci(0, 1, 10);
// Factorials by recursive functions.
echo PHP_EOL;
echo factorials(3);





// ====  php scope ====

/*
 $name = "Earth"; // global scope
    function doSomething(){
    global $name;
    echo $name;
    // echo $GLOBALS['name']; // Supper globals varriable;
}
doSomething();


function doSomething(){
    $name = "Earth"; // local scope
    echo $name;
}
*/

function doSomething(){
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;
}

function doExtra(){
    static $i; // static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo PHP_EOL;

}

doSomething();
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();

