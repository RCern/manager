<?php 

	$obj = json_decode($_POST['obj'],true);
	

	require_once('connectdb.php');
    $conn = connect();

	$sql ="UPDATE project SET name =".'"'.$obj['name'].'"'.", deadline =".'"'.$obj['deadline'].'"'.", priority=".$obj['priority'].", percentageDone =".$obj['percentageDone']." WHERE projectID=".$obj['projectID'];
	$conn->query($sql);
	$conn->close();
 ?>