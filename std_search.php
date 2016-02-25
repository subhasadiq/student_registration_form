<?php

//capture search term and remove spaces at its both ends if the is any
$searchTerm = trim($_GET['keyname']);

//check whether the name parsed is empty
if($searchTerm == "")
{
	echo "Enter name you are searching for.";
	exit();
}

//database connection info
$host = "localhost"; //server
$db = "test"; //database name
$user = "root"; //dabases user name
$pwd = ""; //password

//connecting to server and creating link to database
$link = mysqli_connect($host, $user, $pwd, $db);

//MYSQL search statement
$query = "SELECT * FROM students WHERE FirstName LIKE '%$searchTerm%'";

$results = mysqli_query($link, $query);
?>
<table border='1' cellpadding='1'>
			<tr>
				<th>Id</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>CNIC</th>
				<th>Gender</th>
				<th>Email</th>
				<th>Address</th>
				<th>Contact</th>
				<th>DOB</th>
			</tr>
<?php

/* check whethere there were matching records in the table
by counting the number of results returned */
if(mysqli_num_rows($results) >= 1)
{
	$output = "";
	while($row = mysqli_fetch_array($results))
	{
?>
		<tr>
		<td> <?php echo $output . $row['Id'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['FirstName'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['LastName'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['CNIC'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['Gender'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['Email'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['Address'] . "<br /"; ?> </td>
		<td> <?php echo $output . $row['Contact'] . "<br />"; ?> </td>
		<td> <?php echo $output . $row['DOB'] . "<br /><br />"; ?> </td>
		</tr>
        <?php
	}
	echo $output;
}
else
	echo "There was no matching record for the name " . $searchTerm;
?>
</table>