<?php
require "config.php";

$name = $_POST["shopename"];
$address =$_POST["address"];
$type = $_POST["dress_type"];
$image =$_POST["image"];
$description =$_POST["description"];
$contact = $_POST["contact"];

$sql = "INSERT INTO wedding_dress(name,address,dress,image,description,contact)
VALUE('$name','$address','$type','$image','$description','$contact')";

if($con -> query($sql)){

    echo "successfully stored!";
}

else{
    echo "unsuccessfully stored!!".$con->error;
}

$con->close();


?>
