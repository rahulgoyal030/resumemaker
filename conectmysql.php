<?php
	$serverName="localhost";
	$username="root";
	$password="";
	$conn=mysqli_connect($serverName,$username,$password) or die("Can't connect to db");

	
	$dbSelect=mysqli_select_db($conn,'resumemaker');
	
	//$sql="Create Database uidai if not exist";
?>