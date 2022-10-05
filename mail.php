<?php
$name=&_POST['name'];
$email=&_POST['email'];
$subject=&_POST['subject'];
$message=&_POST['message'];

$mailheader="From:".$name."<".$email.">\I\n";
$recipient="mahrishisinghrathore@gmail.com";
mail($recipient,$message,$mailheader)
or die("Error!");

// echo"Message send";


 

?>