<?php  
// JSON = JavaScript object Notion

$data = array(
    "firstname"=>"Tanvir",
    "lastname"=>"Hasan",
    "email"=>"01mdalamin1@gmail.com",
);
echo json_encode($data, JSON_PRETTY_PRINT);
