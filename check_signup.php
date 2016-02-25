<?php 
include 'db.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

mysql_query("INSERT INTO `registereds` (Name,Email,Password) value('$name','$email','$password')");
header('Location: success_signup.php');
?>