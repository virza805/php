<?php  
$fileName = "e:\\Working Develop\\php\\7-file\\data\\f3.txt"; // for windows pc

// $fp = fopen($fileName, 'r+'); // file read-write for 'r+' before data save then new data input
// $fp = fopen($fileName, 'w+'); // file read-write for 'w+' before data save then new data input 1st & over-wite
// $fp = fopen($fileName, 'a+'); 

// file_put_contents($fileName, "Mars\n"); // for Quik input data. but distroy before data
// file_put_contents($fileName, "Jupiter\n", FILE_APPEND); // for Quik input data. before data save
// file_put_contents($fileName, "Jupiter\n", FILE_APPEND | LOCK_EX); // for Quik input data. before data save and LOCK_EX file taka lock rakba kaj hoay porjonto jata at a time another user not distrab

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
$fp = fopen($fileName, "w"); // proseces of  data write 
foreach ($students as $student) {
    $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
    fwrite($fp,$data);
}
fclose($fp);

$fp = fopen($fileName, "r"); // proseces of  data read 
while ($data = fgets($fp)) {
    $student = explode(",",$data);
    printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
}
fclose($fp);
*/
// ===## Alter native Way data write-read ##===
// $fp = fopen($fileName, "w"); // proseces of  data write 
// foreach ($students as $student) {
//     fputcsv($fp,$student);
// }
// fclose($fp);

// $fp = fopen($fileName, "r"); // proseces of  data read 
// while ($student = fgetcsv($fp)) {
//     printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }
// fclose($fp);

// ===### New student add ###====
/*
$student = array(
    'fname' => 'Tanvir',
    'lname' => 'Hasan',
    'age' => 13,
    'class' => 7,
    'roll' => 1,
);
$fp = fopen($fileName, "a"); 
fputcsv($fp,$student);
fclose($fp);
*/
// ====### Deleted 2nd student ###====

$data = file($fileName);
unset($data[1]); // mene deleted 2nd data
print_r($data);
$fp = fopen($fileName, "w"); 
foreach ($data as $line) {
    fwrite($fp, $line);
}
fclose($fp);

