<?php

$name = $_REQUEST['first'];
$surname = $_REQUEST['last'];
$number = $_REQUEST['number'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if(empty($name) || empty($surname) || empty($number) || empty($email) || empty($message))
{
    echo "Please fill all the details";
}
else
{
    mail("chodankerrutooja@gmail.com", "New Visitor", $message, "From : $name $surname\n Contact : $number<$email>");
}

?>