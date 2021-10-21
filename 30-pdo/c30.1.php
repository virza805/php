<?php
// PDO = php Data Object 
// DNS = Data Source Name
// $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=school;charset=UTF8;", 'root','');
$pdo = new PDO("mysql:host=localhost; port=3306; dbname=school; charset=UTF8;", "root", "");

// if($pdo){
//     echo "Connected";
// }else{
//     echo "Lost Connections ";
// }
if($pdo){
    $stmt = $pdo->query("select * from student where SCLASS=1 and SSEC='a'");
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
    
}



