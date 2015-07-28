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


$sql = "SELECT username FROM signup";
$result = mysqli_query($conn, $sql);

$outp = "";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    	if ($outp != "") {$outp .= ",";}
        
        $outp .= '{"name":"'  . $row["username"] . '"}';

    }
    $outp ='{"records":['.$outp.']}';
    echo($outp);

    
  

} else {
    echo "0 results";
}





mysqli_close($conn);
?>