<?php 

	$obj = json_decode($_POST['obj'],true);
	

	require_once('connectdb.php');
    $conn = connect();

	$sql ="UPDATE team SET Tname =".'"'.$obj['Tname'].'"'." WHERE teamID=".$obj['teamID'];
	$conn->query($sql);

	$sql ="SELECT teamID from team WHERE Tname ='".$obj['Tname']."'";


	$result =  $conn->query($sql);


	$conn->close();
 ?>