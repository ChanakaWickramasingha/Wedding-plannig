<?php
require "config.php";

$name = $_POST["hotelname"];
$address = $_POST["address"];
$type = $_POST["type"];
$star = $_POST["star"];
$image = $_POST["image"];
$description = $_POST["description"];
$contact = $_POST["contact"];

$sql = "INSERT INTO hotel_detail(name,address,type,star,image,description,contact) VALUES
        ('$name','$address','$type','$star','$image','$description','$contact') ";

if($con -> query($sql))
{
    echo "successfull";


}
else{
    echo "unsuccessfull!!".$con->error;
}

$con->close();



?>
