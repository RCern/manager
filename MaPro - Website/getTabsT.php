<?php 
	require_once('connectdb.php');
   $conn = connect();

   $sql = "SELECT T.teamID,T.Tname, E.name from team AS T JOIN team_employee AS TE ON T.teamID = TE.teamID JOIN employee as E on TE.employeeID = E.employeeID";
   $result = $conn->query($sql);
   $i = 0;
   $rows = array();
   if ($result->num_rows > 0)
   {
      while($rows[] = $result->fetch_assoc())
      {
               
      }
      //array_pop($rows);
      echo json_encode($rows);
   }
?>