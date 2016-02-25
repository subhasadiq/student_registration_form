<?php
include 'db.php';
$email=$_POST['email'];
$password=$_POST['password'];
$validate= "SELECT * FROM `registereds` where Email = '$email' and Password = '$password'";
$result=mysql_query($validate);
$num_rows=mysql_num_rows($result);
if($num_rows>0){
	session_start();
	$_SESSION["Email"]='$email';
	$_SESSION["Password"]='$password';
	header('Location: std_form.php');
}
?>