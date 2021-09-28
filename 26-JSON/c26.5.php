<?php  
$unicodeData = [
    "country"=> "বাংলাদেশ" // \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6
];

// echo json_encode($unicodeData); // result = \u09ac\u09be\u0982\u09b2\u09be\u09a6\u09c7\u09b6
echo json_encode($unicodeData, JSON_UNESCAPED_UNICODE);

