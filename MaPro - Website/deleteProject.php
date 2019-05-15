<?php 

	$obj = json_decode($_POST['obj'],true);
	require_once('connectdb.php');
    $conn = connect();

	$sql ="DELETE FROM project where projectID=".$obj['projectID'];
	$conn->query($sql);

	$sql ="DELETE FROM project_team where projectID=".$obj['projectID'];

	$conn->query($sql);
	
	$conn->close();
 ?>