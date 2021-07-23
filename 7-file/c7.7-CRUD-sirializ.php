<?php  
$fileName = "e:\\Working Develop\\php\\7-file\\data\\f4.txt"; // for windows pc

$students = array(
    array(
        'fname' => 'Shahin',
        'lname' => 'Ahmed',
        'age' => 12,
        'class' => 7,
        'roll' => 11,
    ),
    array(
        'fname' => 'Rahim',
        'lname' => 'Ahmed',
        'age' => 11,
        'class' => 7,
        'roll' => 13,
    ),
    array(
        'fname' => 'Nikhil',
        'lname' => 'Chandra',
        'age' => 12,
        'class' => 7,
        'roll' => 14,
    ),
);
/* 
// ===### Data Serialize save ###====
$data = serialize($students);
file_put_contents($fileName,$data,LOCK_EX); // file send
*/

/* 
// ===### New student add ###====
$student = array(
    'fname' => 'Tanvir',
    'lname' => 'Hasan',
    'age' => 13,
    'class' => 7,
    'roll' => 1,
);
$dataFromFile = file_get_contents($fileName); // file call
$allStudents = unserialize($dataFromFile); // serialize data to unserialize;
print_r($allStudents);
array_push($allStudents, $student); // for add student
$data = serialize($allStudents);
file_put_contents($fileName,$data,LOCK_EX); // file send
*/

/*
// ===### Deleted 3rd student ###====
$dataFromFile = file_get_contents($fileName);
$allStudents = unserialize($dataFromFile); 
print_r($allStudents);
unset($allStudents[2]); // for deleted 3rd student
$data = serialize($allStudents);
file_put_contents($fileName,$data,LOCK_EX); // file send
 */

// ===### Data Serialize Read ###====
$dataFromFile = file_get_contents($fileName); // file call
$allStudents = unserialize($dataFromFile); // serialize data to unserialize;
 print_r($allStudents);
