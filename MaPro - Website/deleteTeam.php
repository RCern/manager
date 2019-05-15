<?php 

	$obj = json_decode($_POST['obj'],true);
	require_once('connectdb.php');
    $conn = connect();

	$sql ="DELETE FROM team where teamId=".$obj['teamId'];

	$conn->query($sql);
	
	$sql ="DELETE FROM team_employee where teamId=".$obj['teamId'];

	$conn->query($sql);

	$sql ="DELETE FROM project_team where teamId=".$obj['teamId'];

	$conn->query($sql);
	

	$conn->close();
 ?>