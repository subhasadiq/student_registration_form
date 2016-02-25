
<?php
include_once('db.php');
	
	$sql = "SELECT * from students"; ?>
	<table border='1' cellpadding='1'>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>CNIC</th>
				<th>Gender</th>
                <th>Religion</th>
				<th>Email</th>
				<th>Address</th>
				<th>Contact</th>
				<th>DOB</th>
                <th>Action</th>
			</tr>
            <?php
            if($res = mysql_query($sql)){
				//$result = array();
	
				while ($row=mysql_fetch_array($res)) {
					?>
						<tr>
							<td><?php echo $row['Id']; ?></td>
							<td><?php echo $row['FirstName']; ?></td>
							<td><?php echo $row['LastName']; ?></td>
							<td><?php echo $row['CNIC']; ?></td>
							<td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Religion']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<td><?php echo $row['Address']; ?></td>
							<td><?php echo $row['Contact']; ?></td>
							<td><?php echo $row['DOB']; ?></td>
                            <td><a href ='#' class="delete" data="<?php echo $row['Id']; ?>"><center>Delete</center></a></td>
                            <td> <a href ='#' class="update" data="<?php echo $row['Id']; ?>"><center>Edit</center></a></td>
							
						</tr>
					
                    <?php
				}
			}
			?>
		</table>
        <?php

//echo json_encode ($result);
//echo json_encode(array("result" => $result));
?>

<script>
$(document).ready(function() {
	
//delete from database
	$('.delete').click(function(){
		delete_std_data($(this).attr("data"));
	});


//delete from database
	$('.update').click(function(){
		update_std_data($(this).attr("data"));
	});
});
</script>