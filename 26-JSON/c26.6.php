<?php  
$json = '{"country": "বাংলাদেশ"}';
print_r(json_decode($json, 1));

echo json_last_error_msg();

// if(json_last_error_msg()){
//     echo "Tanvir this is syntex erron";
// }else{
//     echo "\n Good";
// }


