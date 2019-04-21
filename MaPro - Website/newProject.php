<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "manager";
  $conn = new mysqli($servername, $username, $password,$dbname); // Establishing connection with server..

  $name=$_POST['name1']; // Fetching Values from URL.
  $priority= $_POST['priority1']; // Password Encryption, If you like you can also leave sha1.
  $team = $_POST['team1'];
  $date = $_POST['date1'];
  $hours = $_POST['hours1'];
  $cost = $_POST['cost1'];
  $revenues = $_POST['revenues1'];

  if (mysqli_connect_errno())
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
  // Matching user input email and password with stored email and password in database.



  $sql = "SELECT projectID FROM project";
  $result = $conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
      $id = $row["projectID"];
    $id++;
  }
  else
    $id = 1;
  


  $sql = "INSERT INTO `project`(`projectID`, `name`, `hours_allocated`, `deadline`, `revenus`, `costs`, `priority`, `percentageDone`, `Description`) VALUES ('$id','$name','$hours','$date','$revenues','$cost','$priority','0',' ')";


  if (mysqli_query($conn, $sql))
    echo "done1";
  else
    echo "Error.";

  $Tid = 0;

  $sql = "SELECT teamID, Tname FROM `team`";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      if($row['Tname'] == $team)
        $Tid = $row["teamID"];
    }
    echo "I am here" . $team;
    $sql = "INSERT INTO `project_team`(`projectID`, `teamID`, `hours`) VALUES ('$id','$Tid',$hours)";

    if (mysqli_query($conn, $sql)) 
        echo "Done2";
    else
      echo "Error.";
  }


  $conn->close(); // Connection Closed.
?>