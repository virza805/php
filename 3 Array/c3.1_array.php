<?php  

$student = array(
    "tanvir",
    "Md.Al-Amin",
    "Rajat",
    564.505,
    564,
    "Motul",
    "Abdul"
);

// $n = count($student);
// for ($i=0; $i < $n; $i++) { 
//     echo $student[$i]."\n";
// }
echo PHP_EOL;
//  $student[2]= "shafik"; // this is repales
//  $n = count($student);
//  for ($i=0; $i < $n; $i++) { 
//      echo $student[$i] . "\n";
//  }

$students = array_pop($student);
$students = array_shift($student);
echo $students."\n";

// $n = count($student);
// for ($i=0; $i < $n; $i++) { 
//     echo $student[$i]."\n";
// }
echo PHP_EOL;

// $student[] = "Jamal";
 array_push($student, "kamal");

// $n = count($student);
// for ($i=0; $i < $n; $i++) { 
//     echo $student[$i]."\n";
// }

// echo $student;
// echo var_dump($student);
array_unshift($student, "Md.Al-Amin");
array_unshift($student, "Motul");
$n = count($student);
for ($i=0; $i < $n; $i++) { 
    echo $student[$i]."\n";
}


