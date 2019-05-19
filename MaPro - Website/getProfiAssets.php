<?php 

	

	require_once('connectdb.php');
    $conn = connect();


	$sql ="SELECT A.Revenue, A.month from profitability AS P INNER JOIN costassets AS CA ON P.projectID = CA.IdP INNER join assets AS A On CA.IdA = A.Id_assets INNER JOIN project As Pr on P.projectID = Pr.projectId where P.projectID=".$_POST['projectId1'];
	$result =  $conn->query($sql);
	
	if ($result->num_rows > 0)
   {
      while($rows[] = $result->fetch_assoc())
      {
               
      }
      echo json_encode($rows);
   }

	

	$conn->close();
 ?>