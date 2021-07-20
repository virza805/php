<?php  
$fruits = array('apple', 'banana','orange','plum','dates','mango');

//$someFruits = array_slice($fruits, 2);
// $someFruits = array_slice($fruits, 2, 2);
// $someFruits = array_slice($fruits, -5, -1);
$someFruits = array_slice($fruits, 3, 2, true);
print_r($someFruits);

echo PHP_EOL." ## Array Splice ## ".PHP_EOL;
$newFruits = array("jackfruit", "tamarind", "pineapple");
$someFruit = array_splice($fruits, -5, 2, $newFruits);

print_r($someFruit);
print_r($fruits);

echo PHP_EOL;
// $random = array("a"=>12, "b"=>45, "e"=>77, "f"=> 31, 12=>78, "g"=>56);
// $randomData = array_slice($random, 1, -1, true);
// print_r($randomData);
// echo PHP_EOL;

// Array Merge
$fruits = array('apple', 'banana', 'orange', 'plum','dates','mango');
$random = array("a"=>12, "b"=>45, "c"=>34, "d"=>22, "e"=>77, "f"=>31, 12=>78, "g"=>87);

// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_slice($fruits, 3, null, true);
// $newFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);
// echo PHP_EOL."Altar native array marge".PHP_EOL;
// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);

$r1 = array_slice($random, 0, 2, true);
$r2 = array_slice($random, 4, null, true);
$r3 = array("j"=>45, "k"=>12);

$randomData = array_splice($random,2,2,$r3);
$randomDataCorrectWay = $r1+$r3+$r2;

print_r($random);
print_r($randomDataCorrectWay);

echo PHP_EOL."array sort string".PHP_EOL;
$fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'plum','e'=>'dates','f'=>'mango');
$numbers = array(1, 11, 2, 56, 3, 4, 22, 77, 5);
sort($numbers, SORT_STRING);
// print_r($numbers);

$random1 = array('apple', 'banana', 'orange', 'plum','dates','mango');
sort($random1, SORT_STRING | SORT_FLAG_CASE);
print_r($random1);

$n = count($numbers);
for ($i=0; $i < $n ; $i++) { 
    echo $numbers[$i]."\n";
}

foreach($fruits as $fruit){
    echo $fruit."\n";
}
// Array Search
echo PHP_EOL."Array Search".PHP_EOL;
$fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange', 'd'=>'plum','e'=>'dates','f'=>'mango');
$numbers = array(1, 11, 2, 56, 3, 4, 22, 77, 5);

if(in_array(56, $numbers)){ // Array Search function
    echo '56 is found'.PHP_EOL;
}

$offset = array_search(22, $numbers); // array valuer position print 
echo "This values position no:- ". $offset.PHP_EOL;

if(key_exists('bb', $fruits)){  // array key print 
    echo "This key have exists";
}else{
    echo "This key not found";
}
// Common Value Search in Array 
echo PHP_EOL."Common Value print in both Array".PHP_EOL;
$numbers1 = array(1, 11, 2, 56, 3, 4, 22, 77, 5);
$numbers2 = array(88, 11, 21, 56, 38, 44, 22, 77, 5);

$fruits1 = array('a'=>'apple', 'b'=>'banana', 'c'=>'orange');
$fruits2 = array('d'=>'plum','e'=>'dates','f'=>'mango');

$common = array_intersect($numbers1, $numbers2);
// $commonf = array_intersect($fruits1, $fruits2);
$commonf = array_intersect_assoc($fruits1, $fruits2);
print_r($common);
print_r($commonf);

$diff = array_diff($numbers1, $numbers2);
$difff = array_diff($fruits1, $fruits2);
$difff = array_diff_assoc($fruits1, $fruits2);

print_r($diff);
print_r($difff);

// Some utility function of Array 
echo PHP_EOL."Some utility function of Array".PHP_EOL;
$numbers = array(1, 11, 2, 56, 3, 4, 22, 77, 5);

function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
function cube($n){
    return $n*$n*$n;
}
function even($n){
    return $n%2==0;
}
function odd($n){
    return $n%2==1;
}

// $newArray = array_map('cube', $numbers);
// print_r($newArray);
$evenNumbers = array_filter( $numbers, 'even'); // callback function
print_r($evenNumbers);
$oddNumbers = array_filter( $numbers, 'odd'); // callback function
print_r($oddNumbers);

$persons = array('sujon', 'kabir', 'sabab', 'selim', 'roni', 'jamal', 'kamal', 'sayma');

function filterByS($name){
    return $name[0]=='s';
}
$newPersons = array_filter( $persons, 'filterByS'); // callback function
print_r($newPersons);