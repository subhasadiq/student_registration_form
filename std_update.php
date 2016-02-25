<?php
require 'db.php';
$std_id=$_REQUEST['Id'];
$update = mysql_query("SELECT * FROM students WHERE Id  = '$std_id'");
$test = mysql_fetch_array($update);
if (!$update) 
		{
		die("Error: Data not found..");
		}
				$Id=$test['Id'] ;
				$FirstName= $test['FirstName'] ;
				$LastName= $test['LastName'] ;
				$CNIC=$test['CNIC'];	
				$Gender=$test['Gender'];
				$Religion=$test['Religion'];				
				$Email=$test['Email'] ;
				$Address=$test['Address'] ;
				$Contact=$test['Contact'];
				$DOB=$test['DOB'];
				
				

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
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Registration Form</title>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"  />
</head>

<body>
<div class="container">
<h1 class="reg_heading">Fill Your Information</h1>
<div class="form_image">
	<img src="images/images.png" alt="image not found"/>
</div>
<div class="form">
<div class="form_wrapper">
<form id="update_form_std_reg" name="form_std_reg" method="post">
	<div class="form_detail">
	<input type="text" id="std_id" name="std_id" placeholder="Registration Id" value="<?php echo $Id ?>" required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_fname" name="std_fname" placeholder="First Name" value="<?php echo $FirstName ?>" required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_lname" name="std_lname" placeholder="Last Name" value="<?php echo $LastName ?>" required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_cnic" name="std_cnic" placeholder="CNIC Or B-Form" value="<?php echo $CNIC ?>" required/>
    </div>
    <br/>
    <div class="form_detail">
    <label>Gender:</label>
    <input type = "radio" id = "std_gender" name = "std_gender"  value = "Female"
     <?php if ($Gender == 'Female') echo 'checked="checked"'; ?>
     required><gender>Female</gender>
	<input type = "radio" id = "std_gender" name = "std_gender" value = "Male"
     <?php if ($Gender == 'Male') echo 'checked="checked"'; ?> 
     required><gender>Male</gender>
    </div>
    <br/>
    <div class="form_detail">
    <label>Date of Birth:</label>
    <select id = "DOB" name="yearOfBirth" require>
		<option >Year</option>
			<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?> </option>
			<?php endfor; ?>
	</select>
	<select id = "DOB" name="monthOfBirth">
		<option value="">Month</option>
			<?php for ($i = 1; $i <= 12; $i++) : ?>
		<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
	</select>
	<select id = "DOB" name="dateOfBirth">
		<option value="">Date</option>
			<?php for ($i = 1; $i <= 31; $i++) : ?>
		<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
	</select>
    </div><br>
    <div class="form_detail">
    <input type="email" id="std_email" name="std_email" placeholder="E-mail Address" value="<?php echo $Email ?>" required />
    </div>
    <br/>
    <div class="form_detail">
    <label>Religion:</label>
	<select name="std_religion" id="std_religion">
    	<option <?php if($Religion=='Chiristanity') echo 'selected="selected"';?> >Chiristanity</option>
        <option <?php if($Religion=='Hindu') echo 'selected="selected"';?> >Hindu</option>
        <option <?php if($Religion=='Islam') echo 'selected="selected"';?> >Islam</option>
        <option <?php if($Religion=='Other') echo 'selected="selected"';?> >Other</option>
    </select>
    </div>
    <br/>
    <div class="form_detail">
    <input type="text" id="std_address" name="std_address" placeholder="Address" value="<?php echo $Address ?>" required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_contact" name="std_contact" placeholder="Contact" value="<?php echo $Contact ?>" required />
    </div>
    <div class="form_btn">
    <input  type="button" id="submit" name="update" value="Submit" />
    </div>
</form>
<!---<h3><a href ='std_form.php'>Back To Main Form</a></h3>--->
    </div>
</div>
</div>
</body>
</html>