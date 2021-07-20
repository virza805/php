<?php 
 define('PI', 3.1416);
 $variabal= "variabal name Not use this - + / or fist use any number";
 $MyNameTanvir = "This is titale case ";
 $nameTanvir = " iT is camail case ";
 $namuberVariabal = 564.505;
 $age = 0.9531805;
 $ageVariabal = "age";

echo $ageVariabal;

echo "\n"; // new line = "<br>"

// echo constant('PI');
 echo "value of PI = {PI}".PI;
 echo "\n";
 echo constant('PI');

 $constant = 'constant';
 echo "\n";
 echo "value of PI = {$constant('PI')}";
/*
php variabal 

Integer Int
Double / Float
Boolean
Null
String
Array
Object
Resource
*/

$integer_int  = 9531805;
$float_double = 564.505;
$boolean = true; $bool = false;
$null = null;
$string = "Tanvir Md. Al Amin";
$array = ['Tanvir', 'Md.', 'Al', 'Amin', 'Afroza', 'Onamica'];

echo "\n";
var_dump($bool); // this function show variabal details
echo "\n";

$planet1 = "Mercury";
$planet2 = "Jupiter";

echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s\n", strtoupper($planet1) , strrev($planet2));

// php.net/printf  need study printf function
