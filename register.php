<?php
include("db.php");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location:register.html?error=Invalid email format");
    exit;
}

$check = "SELECT * FROM foods WHERE email='$email'";
$result = mysqli_query($conn, $check);

if(mysqli_num_rows($result) > 0){
    header("Location:register.html?error=Email already exists");
}
else{
    $insert = "INSERT INTO foods (fullname, email, password)
    VALUES ('$fullname', '$email', '$password')";

    if(mysqli_query($conn, $insert)){
        header("Location: login.html");
        exit;
    }
    else{
       header("Location:register.html?error=Error registering");
       exit;
    }
}
?>