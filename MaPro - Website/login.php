<?php
	session_start();
	include "connectdb.php";
	$conn = connect();

	$username=$_POST['username1']; // Fetching Values from URL.
	$password= $_POST['password1']; // Password Encryption, If you like you can also leave sha1.

	// Matching user input email and password with stored email and password in database.
	$sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);
	
	if($result->num_rows == 1)
	{
		$row = $result->fetch_assoc();
		$accID =  $row["accountID"];

		$sql = "SELECT name, type, employeeID from employee where accountID = '$accID'";
		$result = $conn->query($sql);

		$row2 = $result->fetch_assoc();
		
		$_SESSION['ID'] = $row2["employeeID"];
	 	echo "Login successful !!";
	}
	else
	{
		echo "Username or Password is wrong !!";
	}
	
	$conn->close(); // Connection Closed.
?>