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

$sql = "SELECT username,password FROM signup";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if($_POST["user"]==$row["username"]&&$_POST["password"]==$row["password"])
        {
        // echo "id: " . $row["name"]. " - Name: " . $row["password"]. "   welcome to the database " ;
           $_SESSION["sesName"]= $_POST["user"];

          // echo '<p>'. $_SESSION["sesName"] .'<p>';


          header('Location: /myWeb/news.php');   // change this according to page
        }

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>