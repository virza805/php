<?php 
// SAS = Software as Services

/*
$to = "augustwind16@gmail.com";
$from = " Tanvir <virza.bd@gmail.com>";
$subject = "How is life";
$body = "Hello \n How are you?";
$body = "From: {$from}\r\n";
echo mail($to, $subject, $body, $headers);

"e:\\Working Develop\\php\\7-file\\data\\f1.txt"; // for windows pc
*/

// https://github.com/PHPMailer/PHPMailer
require_once("phpmailer/PHPmailer.php");
require_once("phpmailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);

try {
    $pm->setFrom("test@examle.com");
    $pm->addAddress("virza.bd@gmail.com");
    $pm->Subject = "Here is the invoice";
    $pm->Body = "Here is the <strong>invoice</strong> from You";
    $pm->AltBody = "Here is the invoice from You last purchase";
    $pm->isHTML(true);
    $pm->addAttachment("e:\\Working Develop\\php\\16-mail\\phpmailer\\application.pdf");
    $pm->send();

    echo "Mail Sent";

} catch (Exception $th) {
    echo "Failed".$pm->ErrorInfo;
}

// php -S localhost:3030
