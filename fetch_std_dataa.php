<?php
	include_once('db.php');
	
	$sql = "SELECT * from students";
	$res = mysql_query($sql);
	$result = array();
	
	while ($row=mysql_fetch_array($res) )
		array_push($result, array('Id' => $row[0],
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
//echo json_encode(array("result" => $result));

?>