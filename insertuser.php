<?php
require 'config.php';

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$dob = $_POST["dob"];
$mail = $_POST["mail"];
$mobNumber = $_POST["mob_Number"];
$password = $_POST["password"];

$sql = "INSERT INTO registration(first_name,last_name,dob,mail,mob_Number,password) VALUES('$first_name','$last_name','$dob','$mail','$mobNumber','$password')";

if($con -> query($sql))
{
    echo "data are stored";
}
else{
    echo "data are not stored".$con->error;
}

$con->close();


?>
