<?php
	session_start();
	require('config.php');
	
	if(!isset($_SESSION["username"])){
		header("Location: index.php");
		session_write_close();
		exit(); 
	}
	
	$idAdmin = $_SESSION['username'];
	$fullname = "SELECT * FROM admin WHERE username='$idAdmin'";
	
	$result = mysqli_query($link, $fullname);
	$fn = mysqli_fetch_assoc($result);
	//echo $fn['fullname'];
?>