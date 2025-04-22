<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "foodieland";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn){
    echo "You are connected!";
}
else{
    echo "There was an issue connecting";
}
?>
