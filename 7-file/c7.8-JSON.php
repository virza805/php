<?php  
$fileName = "e:\\Working Develop\\php\\7-file\\data\\f5.txt"; // for windows pc

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
// ===### save for JSON Data to file"f5.txt" ###====
// $encodedData = json_encode($students);
// file_put_contents($fileName, $encodedData, LOCK_EX);

// ===### JSON Data Read to stdClass Object ###====
$data = file_get_contents($fileName);
$allStudents = json_decode($data);
print_r($allStudents);
echo $allStudents[0]->fname;

// ===### JSON Data Read to Array ###====
// alter native way to show Array
// $data = file_get_contents($fileName);
// $allStudents = json_decode($data, true);
// print_r($allStudents);
// echo $allStudents[1]['fname'];
