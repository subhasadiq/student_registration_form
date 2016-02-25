<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Registration Form</title>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"  />

<script src="js/jquery.min.js"></script>
</head>

<body>
<div class="container">
<h1 class="reg_heading">Fill Your Information</h1>
<div class="form_image">
	<img src="images/images.png" alt="image not found"/>
</div>
<!----------------form starts here -------->
<div class="form">
<div class="form_wrapper" >
<form id="form_std_reg" name="form_std_reg" >
	<div class="form_detail">
	<input type="text" id="std_id" name="std_id" placeholder="Registration Id"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_fname" name="std_fname" placeholder="First Name"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_lname" name="std_lname" placeholder="Last Name"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_cnic" name="std_cnic" placeholder="CNIC Or B-Form"  required/>
    </div>
    <br/>
    <div class="form_detail">
    <label>Gender:</label>
    <input type = "radio" id = "std_gender" name = "std_gender"  value = "Female" required><gender>Female</gender>
	<input type = "radio" id = "std_gender" name = "std_gender" value = "Male" required><gender>Male</gender>
    </div>
    <br/>
    <div class="form_detail">
    <label>Date of Birth:</label>
    <select id = "DOB" name="yearOfBirth" require>
		<option value="">Year</option>
			<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
    <input type="email" id="std_email" name="std_email" placeholder="E-mail Address" required />
    </div>
    <br/>
    <div class="form_detail">
    <label>Religion:</label>
	<select name="std_religion" id="std_religion">
    	<option value="Chiristanity">Chiristanity</option>
        <option value="Hindu">Hindu</option>
        <option value="Islam">Islam</option>
        <option value="Other">Other</option>
    </select>
    </div>
    <br/>
    <div class="form_detail">
    <input type="text" id="std_address" name="std_address" placeholder="Address"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_contact" name="std_contact" placeholder="Contact" required />
    </div>
    <div class="form_btn">
    <input  type="button" id="btn_std_data_submit" name="submit" value="Submit" />
    </div>
<br/>
<br/>


<!-------search form ---->
</form>
<form id="search_std" >
	<div class="form_detail">
 	<input type="text" name="keyname" id="search_std_data" placeholder="Search..." />
    </div>
    <div class="form_btn">
 	<input type="button" id="btn_std_data_search" value="Search" />
    </div>
    <div id="name_data"></div>
</form>
<!----------------form ehds here -------->


<!---------------Show on web page or fetch from database ----->
<div class="table_div">
<h1>Students Records</h1>
<input type="button" id="btn_std_data_display" value="display all value" >
<div id="responsecontainer">
</div>

<!-----------------dlete record-------->
<div id="message"></div>
<div id="messages"></div>

<!----------------update record ---------------->
<div class="table_div">
<h1>Students Records</h1>
<input type="button" id="btn_std_data_dis" value="display all value" >

<ul id="fetch_data">
<li class="li_style"></li>
</ul>
<div id="output">
</div>



<!----------update form------------->


<p id="update_output" ></p>
<form id="form_std_update" name="form_std_update" method="post" >
<table cellpadding="5" cellspacing="5">

	
    <tr><th>Id</th>
	<td><input type="text" id="std_id" name="std_id" placeholder="Registration Id" value="<?= $_GET['Id']; ?> "  required/></td></tr>
    
    <div class="form_detail">
    <input type="text" id="std_fname" name="std_fname" placeholder="First Name"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_lname" name="std_lname" placeholder="Last Name"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_cnic" name="std_cnic" placeholder="CNIC Or B-Form"  required/>
    </div>
    <br/>
    <div class="form_detail">
    <label>Gender:</label>
    <input type = "radio" id = "std_gender" name = "std_gender"  value = "Female" required><gender>Female</gender>
	<input type = "radio" id = "std_gender" name = "std_gender" value = "Male" required><gender>Male</gender>
    </div>
    <br/>
    <div class="form_detail">
    <label>Date of Birth:</label>
    <select id = "DOB" name="yearOfBirth" require>
		<option value="">Year</option>
			<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
    <input type="email" id="std_email" name="std_email" placeholder="E-mail Address" required />
    </div>
    <br/>
    <div class="form_detail">
    <label>Religion:</label>
	<select name="std_religion" id="std_religion">
    	<option value="Chiristanity">Chiristanity</option>
        <option value="Hindu">Hindu</option>
        <option value="Islam">Islam</option>
        <option value="Other">Other</option>
    </select>
    </div>
    <br/>
    <div class="form_detail">
    <input type="text" id="std_address" name="std_address" placeholder="Address"  required/>
    </div>
    <div class="form_detail">
    <input type="text" id="std_contact" name="std_contact" placeholder="Contact" required />
    </div>
    <div class="form_btn">
    <input  type="submit" id="btn_std_data_update" name="update" value="Submit" />
    </div>
<br/>
<br/>

</table>
<!-------search form ---->
</form>


<!---<table border="1px" class="table_style">--->
<?php
/*
include 'db.php';
$result=mysql_query("SELECT * FROM students");
	while($test=mysql_fetch_array($result))
	{
		$std_id = $test['Id'];
		echo "<tr>";
		echo "<td>" .$test['Id']. "</td>";
		echo "<td>" .$test['FirstName']. "</td>";
		echo "<td>" .$test['LastName']. "</td>";
		echo "<td>" .$test['CNIC']. "</td>";
		echo "<td>" .$test['Gender']. "</td>";
		echo "<td>" .$test['Email']. "</td>";
		echo "<td>" .$test['Address']. "</td>";
		echo "<td>" .$test['Contact']. "</td>";
		echo "<td>" .$test['DOB']. "</td>";
		
		//edit and delete option
		echo"<td> <a href ='std_update.php?Id=$std_id'><center>Edit</center></a>";
		echo"<td> <a href ='std_delete.php?Id=$std_id'><center>Delete</center></a>";
		
		echo "</tr>";
	}
	*/
?>
<!---</table--->
</div>
</div>
</div>
</div>
</body>
<script>
//submit function
function submit_std_data(){

// get data from form and submit to php
	//alert('inside submit std data');
	
	// 1: get data from form
	// 2: serialize data
	// 3: send to php via ajax
	
	var form_data = $('#form_std_reg').serialize();
	
$.ajax({
	url:"std_form_insert.php",
	type: 'POST',
	data:form_data,
	// Work with the response
	success: function( response ) {
    	console.log( response ); // server response
		fetch_data();
    }
	
	});

}

//fetch data from database functions
function fetch_data(){

$.ajax({    //create an ajax request to load_page.php
        url: "fetch_std_data.php",            
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });

}

function fetch_dataa(){
	$.getJSON("fetch_std_dataa.php",function(data){
	$("ul").empty();
	$.each(data, function(){
		$("#fetch_data").append(
						"<li class='li_style'>Id "+this['Id']+
						"</li><li class='li_style'>FirstName :"+this['FirstName']+
						"</li><li class='li_style'>LastName :"+this['LastName']+
						"</li><li class='li_style'>CNIC :"+this['CNIC']+
						"</li><li class='li_style'>Gender :"+this['Gender']+
						"</li><li class='li_style'>Religion :"+this['Religion']+
						"</li><li class='li_style'>Email :"+this['Email']+
						"</li><li class='li_style'>Address :"+this['Address']+
						"</li><li class='li_style'>Contact :"+this['Contact']+
						"</li><li class='li_style'>DOB :"+this['DOB']+
						"</li><br /><br />");
		});
	});

}

//search data from database function
function search_std_data(){
	
	var search_data = $('#search_std').serialize();
	
$.ajax({    //create an ajax request to load_page.php
        url: "std_search.php",             
		type: "GET",
		data:search_data,
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#name_data").html(response); 
            //alert(response);
        }

    });
}


//delete data from database function
function delete_std_data(id){
	event.preventDefault();
	
$.ajax({    //create an ajax request to load_page.php
        url: "std_delete.php?Id="+id,             
		type: "GET",
        dataType: "text",   //expect html to be returned                
        success: function(response){                    
            $("#message").text(response); 
            //alert(response);
        }

    });
}

function update_std_data(id){
$.ajax({    //create an ajax request to load_page.php
        url: "std_update_data.php?Id="+id,             
		data:"",
		type:"GET",
        dataType: "json",                  
        success: function(data){                    
        	var Id = data[0];              
        	var FirstName = data[1];
			var LastName = data[2];
			var CNIC = data[3];              
        	var Gender = data[4];
			var Religion = data[5];
			var Email = data[6];              
        	var Address = data[7];
			var Contact = data[8];
			var DOB = data[9];
			$('#output').html(
							"<b>Id: </b>"+Id+
							"<b> FirstName: </b>"+FirstName+
							"<b> LastName: </b>"+LastName+
							"<b> CNIC: </b>"+CNIC+
							"<b> Gender: </b>"+Gender+
							"<b> Religion: </b>"+Religion+
							"<b> Email: </b>"+Email+
							"<b> Address: </b>"+Address+
							"<b> Contact: </b>"+Contact+
							"<b> DOB: </b>"+DOB
							);
            //alert(data);
        }

    });

}


$(document).ready(function() {
	
	//submit through form 
	//$('#form_std_reg').submit(  function(event){
	//	event.preventDefault();
	
	//submit throgh id
	$('#btn_std_data_submit').click(function(){
   	 submit_std_data();
	});
	
	//fetch from database
	$("#btn_std_data_display").click(function() {
		fetch_data();
	});
	
	$("#btn_std_data_dis").click(function() {
		fetch_dataa();
	});
	
	//search from database
	$('#btn_std_data_search').click(function(){
		search_std_data();		
	});
	
	
});
</script>
</html>

