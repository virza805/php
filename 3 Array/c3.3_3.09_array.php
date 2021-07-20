<?php  
$foods = [
    'vegetables' => 'brinjl, brocolli, carrot, capsicam', 
    'fruits' => 'Orange, banana, apple, Mango, Jakfruits', 
    'drinks' => 'water, milk' 
];

// $foods['drinks'] = $foods['drinks'].", orange juice, Mango juice";
// $foods['drinks'] .= ", orange juice";  // array er moda new data input 

// echo $foods['drinks'];
echo PHP_EOL;

foreach($foods as $key=>$value){  // array all value print kora / show kora
    echo $key."=".$value."\n";
}

echo  PHP_EOL."=== Show for array key system === ".PHP_EOL; // This is print / show for array key or value system.
$keys = array_keys($foods);
for ($i=0; $i < count($keys); $i++) { 
    $key = $keys[$i];
    echo $foods[$key]. "\n";
}
echo PHP_EOL."=== show for array value system === ".PHP_EOL; // This is print / show for array key or value system.
$values = array_values($foods);
for ($i=0; $i < count($values); $i++) { 
    $value = $values[$i];
    echo $value. "\n";
    // echo $foods[$key]. "\n";
}

// Multidimensional or nested array

$sample = [
    'test' => [
        'test-again' =>[
            'a',
            'b',
            'c',
            'd'
        ]
    ],
];
echo $sample['test']['test-again'][2];
echo PHP_EOL;
// Multidimensional or nested array

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,4444,[123,234,345]]
];

print_r($sample2);
// echo $sample2[3];
echo PHP_EOL;

// array json

$student = array(
    'fname'=>'Jamal',
    'lname'=>'Ahmed',
    'age'=>'15',
    'class'=>9,
    'section'=>'B',
);
print_r($student);
echo $student['fname']." ".$student['lname']."\n";
printf("%s %s \n",$student['fname'],$student['lname']); // same style

$serialized = serialize($student);
echo $serialized.PHP_EOL;
$newstudent = unserialize($serialized);
print_r($newstudent);

$jsondata = json_encode($student);
echo $jsondata.PHP_EOL;
$student2 = json_decode($jsondata,true);
print_r($student2);

echo PHP_EOL;
// Copy by value
// Deep Copy
// $person = array('fname'=>'Hello', 'lname'=>'World');
// $newPerson = $person;
// $newPerson['lname'] = 'virza';

// print_r($person);
// print_r($newPerson);

// echo PHP_EOL;

// Copy by reference
// Shallow Copy
$person = array('fname'=>'Hello', 'lname'=>'World');
$newPerson = &$person;
$newPerson['lname'] = 'virza';

print_r($person);
print_r($newPerson);
echo PHP_EOL."====".PHP_EOL;

// Copy by reference
// Shallow Copy

function printData(&$person){
    $person['fname'] .=" Changed";
    print_r($person);
}

printData($person);
print_r($person);
// data removed;
echo PHP_EOL."### data removed ###".PHP_EOL;
unset($person['fname']);
print_r($person);

// php data check class 3.9
echo PHP_EOL."### Data Check ###".PHP_EOL;
$onamica = "";
if (isset($onamica) && (is_numeric($onamica) || $onamica != '') ) {
    echo "Name is set and it's not empty";
}else{
    echo 'Name is either not set or it\'s empty';
}