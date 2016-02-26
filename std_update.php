<?php 

require 'db.php';
						

	
	$std_id_update=$_GET['std_id'] ;
	$std_fname_update= $_GET['std_fname'] ;	
	$std_lname_update= $_GET['std_lname'] ;
	$std_cnic_update=$_GET['std_cnic'];
	$std_gender_update=$_GET['std_gender'];
	$std_religion_update=$_GET['std_religion'];					
	$std_email_update=$_GET['std_email'] ;
	$std_address_update=$_GET['std_address'] ;
	$std_contact_update=$_GET['std_contact'];
	
	
		$yearOfBirth_update = $_GET['yearOfBirth'];
		$monthOfBirth_update = $_GET['monthOfBirth'];
		$dateOfBirth_update = $_GET['dateOfBirth'];
		// Validate
		if (empty($yearOfBirth_update)){
			// Generate date of birth in format of YYYY-mm-dd
			$date_update = $yearOfBirth_update.'-'.$monthOfBirth_update.'-'.$dateOfBirth_update;
		}
		else{
			$date_update = $yearOfBirth_update.'-'.$monthOfBirth_update.'-'.$dateOfBirth_update;
		}
		
	
	//delete query slect fromm database table
	$update_table=mysql_query("UPDATE students SET Id ='$std_id_update', FirstName = '$std_fname_update', LastName ='$std_lname_update',CNIC = '$std_cnic_update',Gender = '$std_gender_update',Religion = '$std_religion_update', Email ='$std_email_update', Address ='$std_address_update', Contact = '$std_contact_update', DOB = '$date_update' WHERE ID = '$std_id_update'")
				or die(mysql_error());
echo "Data Updated Successfully !!!";
//header("Location: std_form.php");

mysql_close($conn);
?>
