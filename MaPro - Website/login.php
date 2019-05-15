<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manager";
	$conn = new mysqli($servername, $username, $password,$dbname); // Establishing connection with server..

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


		$_SESSION['username'] = $username;
		$_SESSION['nom'] = $row2["name"];
		$_SESSION['role'] = $row2["type"];
		$_SESSION['description'] = $row2["employeeID"];
	 	echo "done";
	}
	else
	{
		echo "Username or Password is wrong...!!!!";
	}
	
	$conn->close(); // Connection Closed.
?>