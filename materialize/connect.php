<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manager";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row[] = $result->fetch_assoc()) {
        
    }
    $json = json_encode($row);
    echo $json;
   
} else {
    echo "EMPTY DATABASE";
}
$conn->close();
}
?>