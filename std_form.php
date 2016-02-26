<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Registration Form</title>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet"  />
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container_wrapper">
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
    <input type = "radio" id = "std_gender_female" name = "std_gender"  value = "Female" required><gender>Female</gender>
	<input type = "radio" id = "std_gender_male" name = "std_gender" value = "Male" required><gender>Male</gender>
    </div>
    <br/>
    <div class="form_detail">
    <label>Date of Birth:</label>
    <select id = "year" name="yearOfBirth" require>
		<option value="">Year</option>
			<?php for ($i = 1980; $i < date('Y'); $i++) : ?>
		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
	</select>
	<select id = "month" name="monthOfBirth">
		<option value="">Month</option>
			<?php for ($i = 1; $i <= 12; $i++) : ?>
		<option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
			<?php endfor; ?>
	</select>
	<select id = "day" name="dateOfBirth">
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
    <input  type="button" id="btn_std_data_update" name="update" value="Update" />
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
<!----
<div class="table_div">
<h1>Students Records</h1>
<input type="button" id="btn_std_data_display" value="display all value" >
<div id="responsecontainer">
</div>
---->
<!-----------------dlete record-------->
<div id="message"></div>
<div id="messages"></div>

<!----------------update record ---------------->
<div class="table_div">
<h1>Students Records</h1>
<input type="button" id="btn_std_data_dis" value="display all value" >
<table class="table" id="fetch_data">
    	<thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>CNIC</th>
                <th>Gender</th>
                <th>Religion</th>
                <th>Email</th>
                <th>Address</th>
                <th>Contact</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="fetch_data_tbody" >
      
        </tbody>
</table>

</div>


<!----------update form------------->
<div id="output">
</div>


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
	//$("table").empty();
	$.each(data, function(){
		$("#fetch_data_tbody").append(
						"<tr><td> "+this['Id']+
						"</td><td> "+this['FirstName']+
						"</td><td> "+this['LastName']+
						"</td><td> "+this['CNIC']+
						"</td><td> "+this['Gender']+
						"</td><td> "+this['Religion']+
						"</td><td> "+this['Email']+
						"</td><td> "+this['Address']+
						"</td><td> "+this['Contact']+
						"</td><td> "+this['DOB']+
						"</td><td> <button onclick='delete_std_data("+this['Id']+")'>Delete</button>"
						+" <button onclick='fetch_form_value_std("+this['Id']+")'>Edit</button>"+
						"</td></tr><br /><br />");
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

function fetch_form_value_std(id){
	
$.ajax({    //create an ajax request to load_page.php
        url: "std_fetch_form_value.php?Id="+id,             
		data:"",
		type:"GET",
        dataType: "json",                  
        success: function(data){                    
        	var Id = data[0].Id;              
        	var FirstName = data[0].FirstName;
			var LastName = data[0].LastName;
			var CNIC = data[0].CNIC;              
        	var Gender = data[0].Gender;
			var Religion = data[0].Religion;
			var Email = data[0].Email;              
        	var Address = data[0].Address;
			var Contact = data[0].Contact;
			var DOB = data[0].DOB;
			if(Gender=="Male"){
				$('#std_gender_male').attr('checked', true);
				}
				else{
					$('#std_gender_female').attr('checked', true);
					}
			
			var dates = DOB.split("-");
			
			$('#std_id').val(Id);
			$('#std_fname').val(FirstName);
			$('#std_lname').val(LastName);
			$('#std_cnic').val(CNIC);
			$('#std_religion').val(Religion);
			$('#std_email').val(Email);
			$('#std_address').val(Address);
			$('#std_contact').val(Contact);
			$('#std_dob').val(DOB);
			
			$('#year').val(dates[0]);
			$('#month').val(dates[1]);
			$('#day').val(dates[2]);

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

//update std data
function update_std_data(){
	var update_data = $('#form_std_reg').serialize();
$.ajax({    //create an ajax request to load_page.php
        url: "std_update.php",             
		type: "GET",
		data: update_data,
        dataType: "html",   //expect html to be returned                
        success: function(response){ 
            console.log(response);
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
	
	//update std data
	$('#btn_std_data_update').click(function(){
		update_std_data();		
	});
	
	
});
</script>
</html>

