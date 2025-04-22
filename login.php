<?php
include("db.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT fullname FROM foods WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $name = $row["fullname"];
    header("Location:welcome.php?name=" .urlencode($name));
    exit;
}
else{
   header("Location:login.html?error=Incorrect login details");
}
?>