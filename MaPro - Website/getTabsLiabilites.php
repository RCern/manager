<?php 

	
session_start();
	require_once('connectdb.php');
    $conn = connect();

	

	$sql ="SELECT A.name, A.price, A.month from profitability AS P INNER JOIN costliabilities AS CA ON P.projectID = CA.IdP INNER join liabilities AS A On CA.IdL = A.ID_liabilities INNER JOIN project As Pr on P.projectID = Pr.projectId where P.ProjectId=".$_SESSION["idPRJ"];

	
	$result =  $conn->query($sql);
	$rows = array();
	if ($result->num_rows > 0)
   {
      while($rows[] = $result->fetch_assoc())
      {
               
      }
      echo json_encode($rows);
   }

	

	$conn->close();
 ?>