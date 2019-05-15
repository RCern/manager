<?php 

	$obj = json_decode($_POST['obj'],true);
	require_once('connectdb.php');
    $conn = connect();

	$sql ="DELETE FROM employee where employeeID=".$obj['employeeID'];

	$conn->query($sql);
	
	$sql ="DELETE FROM team_employee where employeeID=".$obj['employeeID'];

	$conn->query($sql);
	

	$conn->close();
 ?>