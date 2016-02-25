<?php

require 'db.php';
$std_id=$_GET['Id'];
$update = mysql_query("SELECT * FROM students WHERE Id  = '$std_id'");
$row = mysql_fetch_array($update);
$result = array();

	array_push($result, array(  'Id' => $row[0],
								'FirstName' => $row[1],
								'LastName' => $row[2],
								'CNIC' => $row[3],
								'Gender' => $row[4],
								'Religion' => $row[5],
								'Email' => $row[6],
								'Address' => $row[7],
								'Contact' => $row[8],
								'DOB' => $row[9]
		));
echo json_encode ($result);
				
				
/*
if(isset($_POST['update']))
{	
	$std_id_update=$_POST['std_id'] ;
	$std_fname_update= $_POST['std_fname'] ;	
	$std_lname_update= $_POST['std_lname'] ;
	$std_cnic_update=$_POST['std_cnic'];
	$std_gender_update=$_POST['std_gender'];
	$std_religion_update=$_POST['std_religion'];					
	$std_email_update=$_POST['std_email'] ;
	$std_address_update=$_POST['std_address'] ;
	$std_contact_update=$_POST['std_contact'];
	$std_dob_update=$_POST['std_dob'];
	
	//deelete query slect fromm database table
	$update_table=mysql_query("UPDATE students SET Id ='$std_id_update', FirstName = '$std_fname_update', LastName ='$std_lname_update',CNIC = '$std_cnic_update',Gender = '$std_gender_update',Religion = '$std_religion_update', Email ='$std_email_update', Address ='$std_address_update', Contact = '$std_contact_update', DOB = '$std_dob_update' WHERE ID = '$std_id'")
				or die(mysql_error());
echo "Data Updated Successfully !!!";
//header("Location: std_form.php");
}
mysql_close($conn);
*/
/*
include 'db.php';
		$std_id=$_POST['std_id'];
		$std_fname=$_POST['std_fname'];
		$std_lname=$_POST['std_lname'];
		$std_cnic=$_POST['std_cnic'];
		$std_gender=$_POST['std_gender'];
		$std_email=$_POST['std_email'];
		$std_religion=$_POST['std_religion'];
		$std_address=$_POST['std_address'];
		$std_contact=$_POST['std_contact'];
		
		$yearOfBirth = $_POST['yearOfBirth'];
		$monthOfBirth = $_POST['monthOfBirth'];
		$dateOfBirth = $_POST['dateOfBirth'];
		
			$update_table="UPDATE students SET Id ='$std_id_update', FirstName = '$std_fname_update', LastName ='$std_lname_update',CNIC = '$std_cnic_update',Gender = '$std_gender_update',Religion = '$std_religion_update', Email ='$std_email_update', Address ='$std_address_update', Contact = '$std_contact_update', DOB = '$std_dob_update' WHERE ID = '$std_id'";
			if(mysql_query($update_table)){
				echo "Recored Updated Successfully!!!";
				}
				else
				{
				echo mysql_error();	
				}
			
?>
*/