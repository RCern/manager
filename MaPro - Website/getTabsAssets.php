<?php 

	
	session_start();
	require_once('connectdb.php');
    $conn = connect();


	$sql ="SELECT A.Id_assets ,A.name ,A.Revenue, A.month from profitability AS P INNER JOIN costassets AS CA ON P.projectID = CA.IdP INNER join assets AS A On CA.IdA = A.Id_assets INNER JOIN project As Pr on P.projectID = Pr.projectId where P.projectID=".$_SESSION["idPRJ"];
	$result =  $conn->query($sql);
	 $i = 0;
   $rows = array();
	if ($result->num_rows > 0)
   {
      while($rows[] = $result->fetch_assoc())
      {
               
      }
      $result = json_encode($rows);
      echo $result;
   }

	

	$conn->close();
 ?>