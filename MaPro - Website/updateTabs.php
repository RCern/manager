<?php 

	$obj = json_decode($_POST['obj'],true);
	

	require_once('connectdb.php');
    $conn = connect();

	$sql ="UPDATE project SET name =".'"'.$obj['name'].'"'.", deadline =".'"'.$obj['deadline'].'"'.", priority=".$obj['priority'].", percentageDone =".$obj['percentageDone']." WHERE projectID=".$obj['projectID'];
	$conn->query($sql);

	$sql ="SELECT teamID from team WHERE Tname ='".$obj['Tname']."'";


	$result =  $conn->query($sql);
	
	while($row = $result->fetch_assoc())
         {              
            $sql ="UPDATE project_team SET projectID =".$obj['projectID'].", teamID =".$row['teamID']." WHERE projectID =".$obj['projectID'];
			$conn->query($sql);
             
         }


	$conn->close();
 ?>