<?php
  session_start();
  include "connectdb.php";
  $conn = connect();

  $username=$_POST['username1']; // Fetching Values from URL.
  $password= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.
  $email = $_POST['email1'];
  $token = $_POST['token1'];
    
  // Matching user input email and password with stored email and password in database.
  $sql = "SELECT token from tokens where token = '$token'";
  $result = $conn->query($sql);


  if($result->num_rows > 0)
  {
    $sql = "SELECT accountID FROM account";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
            $id = $row["accountID"];
        
        $id++;
    }
    else
      $id = 1;


    $sql = "INSERT INTO `account`(`accountID`, `username`, `email`, `password`) VALUES ('$id','$username','$email','$password')";

    if (mysqli_query($conn, $sql))
      echo "You have Successfully Registered !!";
    
    else
      echo "Error !!";
  }
  else
    echo "Wrong token !!";

  $conn->close(); // Connection Closed.
?>