<?php 
// SAS = Software as Services


$to = "augustwind16@gmail.com";
$from = " Tanvir <virza.bd@gmail.com>";
$subject = "How is life";
$body = "Hello \n How are you?";
$body = "From: {$from}\r\n";
echo mail($to, $subject, $body, $headers);

