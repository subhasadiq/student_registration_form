<?php
include 'db.php';
$std_id = $_GET['Id'];
//deelete query slect fromm database table
mysql_query("DELETE FROM students Where Id= $std_id");
	//header("Location: std_form.php");
/*
echo"<h2>Id: ".$std_id. "  <br>Data is Deleted</h2>";
echo" <a href ='std_form.php'>Back To Main Form</a>";
*/
?>