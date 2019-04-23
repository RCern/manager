<?php 
session_start();
	$_SESSION['size'] = $_POST['sizes'];
	echo $_SESSION['size'];
 ?>