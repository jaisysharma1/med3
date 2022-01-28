<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']; 

$mailheader  "Form:".$name."<".$email.">\r\n"


$receipient = "jaisysharma9817@gmail.com"

mail($receipient, $subject, $message, $mailheader)
or die("Error!");

echo"message send";
?>