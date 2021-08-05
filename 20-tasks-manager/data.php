<?php  
include_once "config.php";
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
// $connection =new mysqli('localhost','root','','task');
if(!$connection){
    throw new Exception("Con not connect to database");
}else{
    echo "Connected \n";
    // echo mysqli_query($connection, "INSERT INTO task (task, date) VALUES ('Onamica', '2019-05-06')"); // insert a record
//     $result = mysqli_query($connection, "SELECT * FROM task");
//     while($data = mysqli_fetch_assoc($result)){
//         echo "<pre>";
// print_r($data);
//         echo "</pre>";
//     }
//     mysqli_close($connection); // This is a close connection, is good practice. those automatically close when the script ends ;
}


