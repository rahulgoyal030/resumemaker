<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";
session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO `signup`(`id`, `username`, `email`, `password`) VALUES (NULL,'$_POST[user]','$_POST[email]','$_POST[pass]')";
mysqli_query($conn, $sql);

 header('Location: /myWeb/index.html'); 




mysqli_close($conn);
?>