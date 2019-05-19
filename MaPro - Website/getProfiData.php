<?php 

	

	require_once('connectdb.php');
    $conn = connect();

	$sql = "SELECT deadline from project where projectID=".$_POST['projectId1'];

	/*$sql ="SELECT A.Revenue, P.month from profitabilty AS P INNER JOIN assets AS A ON P.ID_assests = A.ID INNER JOIN project As Pr on P.projectID = Pr.projectID";

	$sql ="SELECT L.Price, P.month from profitabilty AS P INNER JOIN liabilities As L ON P.ID_liabilities = L.ID INNER JOIN project As Pr on P.projectID = Pr.projectID";

	*/
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