<?php 
	require_once('connectdb.php');
   $conn = connect();

   $sql = "SELECT Tname from team";
   $result = $conn->query($sql);
   $i = 0;
   $rows = array();
   
   if ($result->num_rows > 0)
   {
      while($rows[] = $result->fetch_assoc())
      {
            
      }
      array_pop($rows);
      echo json_encode($rows);
   }
?>