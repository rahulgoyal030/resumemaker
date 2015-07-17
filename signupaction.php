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



$sql = "INSERT INTO `signup`(`id`, `username`, `email`, `password`) VALUES (NULL,'$_POST[username1]','$_POST[email]','$_POST[pass]')";
mysqli_query($conn, $sql);

 header('Location: /resumemaker/index.php'); 




mysqli_close($conn);
?>