<?php
require "config.php";

$mail = $_POST["email"];
$password = $_POST["password"];


$mail = stripcslashes($mail);
$password = stripcslashes($password);
$mail = mysqli_real_escape_string($con, $mail);
$password = mysqli_real_escape_string($con, $password);


$sql = "SELECT * FROM registration WHERE mail = '$mail' and password = '$password' ";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){
    header("location:user_home.php");
}
else{
    echo "<h1> Login failed. Invalid username or password.</h1>";
}


$con->close();

?>
