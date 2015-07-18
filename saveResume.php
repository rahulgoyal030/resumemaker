<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resumemaker";
session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO `resume`(`id`, `name`, `degree`, `email`, `phone`, `dob`, `college`, `objective`, `skills`, `interest`, `projectName`, `details`)
 VALUES (NULL,'$_POST[name]','$_POST[degree]','$_POST[email]','$_POST[phone]','$_POST[dob]','$_POST[college]','$_POST[objective]',
 	'$_POST[skill]','$_POST[interest]','$_POST[projectName]','$_POST[projectDetail]')";

mysqli_query($conn, $sql);

 header('Location: /resumemaker/resume.php'); 




mysqli_close($conn);
?>