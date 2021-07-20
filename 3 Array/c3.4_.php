<?php  
// delimeter string to array

// $vegetables = explode(
//     ', ','brinjal, brocolli, carrot, capsicam'
// );
// echo $vegetables[1];
// echo PHP_EOL;
// echo var_dump($vegetables);
// delimeter array to string

// $vegetablesString = join(', ', $vegetables);

// when we need to multipul delimeter by regular  expresion function.
$vegetables = preg_split(
        '/(, |,)/ ','brinjal, brocolli, carrot, capsicam,potato,banana,etc'
     );
print_r($vegetables);

 $vegetablesString = join(', ',$vegetables);
echo count($vegetables);

