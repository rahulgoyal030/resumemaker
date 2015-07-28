<?php 
 

 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumemaker";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

	
	session_start();
	if(isset($_SESSION['sesName']))
	{
		unset($_SESSION['sesName']);
		//$_SESSION['sesName']="a";
		header('location: index.php');
		exit();
	}
	else
	{
		header('location: index.php');
	}


	mysqli_close($conn);

	
?>