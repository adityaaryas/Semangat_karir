<?php

$connection =mysqli_connect('localhost','root','','contact_db');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $_REQUEST ="insert into contact_from (name,email,phone,message) values('$name','$email','$phone','$message')";
}
?>