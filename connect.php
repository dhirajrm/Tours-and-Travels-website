<?php

$pdo = new pdo('mysql:host=localhost;dbname=travelo;','root','');

session_start();

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$message=$_POST['message'];

$insert= $pdo->prepare("insert into feedback(fullname,email,message) values(:fullname,:email,:message)");

$insert->bindparam(':fullname',$fullname );
$insert->bindparam(':email',$email);
$insert->bindparam(':message',$message );

$insert->execute();
header('location:contactus.html')
?> 