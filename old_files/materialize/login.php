<?php
function connect(){
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
    return $conn;
}
}

function login(){
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

    $name = $_POST['email'];
    $password = $_POST['password'];

    $conn = connect();
    $sql = "SELECT * FROM account WHERE username='$name' AND password='$password'";
    $result = $conn->query($sql);
   
    if ($result->num_rows == 1) {
        $conn->close();
        header('Location: main.html');
    } 
     else
    {
        $conn->close();
        echo "Wrong Username or password";
        header('Location: index.php');
    }
	
}
else{
    
    echo "Enter both";
    header('Location: index.php');
    }
}


?>