<?php 
	require_once('connectdb.php');
   $conn = connect();

   $sql = "SELECT  T.Tname, P.name AS Pname, E.name AS Ename from team AS T INNER JOIN project_team AS PT ON T.teamID=PT.teamID INNER JOIN project AS P ON PT.projectID=P.projectID INNER JOIN team_employee AS TE ON T.teamID=TE.teamID INNER JOIN employee AS E ON TE.employeeID = E.employeeID";
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