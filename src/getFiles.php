<?php
	 session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manager";
	$conn = new mysqli($servername, $username, $password,$dbname);

	if($_POST['projects'] == "projects"){
		$sql = "SELECT * FROM project";
		$result = $conn->query($sql);
		$myArray = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array(MYSQL_ASSOC)) {
				$myArray[] = $row;
        		
    }
    	echo json_encode($myArray);
		}
	} else if(($_POST['projects'] == "projects"){
		$sql = "SELECT * FROM project";
		$result = $conn->query($sql);
		$myArray = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_array(MYSQL_ASSOC)) {
				$myArray[] = $row;
        		
    }
    	echo json_encode($myArray);
		}
	}



 ?>