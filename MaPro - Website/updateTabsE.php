<?php 

	$obj = json_decode($_POST['obj'],true);
	

	require_once('connectdb.php');
    $conn = connect();

	$sql ="UPDATE employee SET name =".'"'.$obj['name'].'"'.", type =".'"'.$obj['type'].'"'.", salary=".$obj['salary']." WHERE employeeID=".$obj['employeeID'];
	$conn->query($sql);

	$sql ="SELECT teamID from team WHERE Tname ='".$obj['Tname']."'";


	$result =  $conn->query($sql);
	
	while($row = $result->fetch_assoc())
         {              
            $sql ="UPDATE team_employee SET employeeID =".$obj['employeeID'].", teamID =".$row['teamID']." WHERE employeeID =".$obj['employeeID'];
			$conn->query($sql);
             
         }

	

	$conn->close();
 ?>