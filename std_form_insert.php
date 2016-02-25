<?php
	
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
		// Validate
		if ($yearOfBirth = '' && $monthOfBirth = '' && $dateOfBirth = '') {
			// Generate date of birth in format of YYYY-mm-dd
			$date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
		}
		else{
			$date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
		}
		
		$result=mysql_query("INSERT INTO `students`(Id,FirstName,LastName,CNIC,Gender,Religion,Email,Address,Contact,DOB)
		VALUES('$std_id','$std_fname','$std_lname','$std_cnic','$std_gender','$std_religion','$std_email','$std_address','$std_contact','$date')"
		);
		if($result)
		{
			echo "Data Submitted Successfully !!!";
		}
			else
			{
				mysql_error();
			}

?>