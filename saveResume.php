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


$imagename=$_FILES["profile"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['profile']['tmp_name']));





$sql = "INSERT INTO `resume`(`id`, `name`, `degree`, `email`, `phone`, `dob`, `college`, `objective`, `skills`, `interest`, `projectName`, `details`,`profile`)
 VALUES (NULL,'$_POST[name]','$_POST[degree]','$_POST[email]','$_POST[phone]','$_POST[dob]','$_POST[college]','$_POST[objective]',
 	'$_POST[skill]','$_POST[interest]','$_POST[projectName]','$_POST[projectDetail]','$imagetmp')";

mysqli_query($conn, $sql);



//Insert the image name and image content in image_table
//$insert_image="INSERT INTO `resume`( `profile`) VALUES('$imagetmp')";

//mysql_query($conn,$insert_image);

 header('Location: /resumemaker/resume.php'); 




mysqli_close($conn);
?>