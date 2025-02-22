<?php
//sending email
$to="I2Egq@example.com";
$subject="Hello";
$message= "Hello world";
$headers="From: I2Egq@example.com";
$mail=mail($to,$subject,$message,$headers);

if($mail){
    echo "mail sent";
}else{
    echo "mail not sent";
}

?>