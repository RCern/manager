<?php 
	 require_once('connectdb.php');
            $conn = connect();

            $sql = "SELECT P.projectID, P.name ,T.Tname, P.deadline, P.percentageDone,P.priority from project as P JOIN project_team as PT ON P.projectID = PT.projectID JOIN team as T ON T.teamID = PT.teamID";
            $result = $conn->query($sql);
            $i = 0;
         	$rows = array();
            if ($result->num_rows > 0) {
              while($rows[] = $result->fetch_assoc()) {
                  
        }
        //array_pop($rows);
         echo json_encode($rows);
    }



?>