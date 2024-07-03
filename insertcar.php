<?php
require "config.php";

$brand = $_POST["brand"];
$type = $_POST["cartype"];
$price = $_POST["price"];
$image = $_POST["image"];
$description = $_POST["description"];
$contact = $_POST["contact"];

$sql = "INSERT INTO car(brand,type,price,image,	description	,contact)
        VALUE ('$brand','$type','$price','$image','$description','$contact')";

if($con->query($sql)){
    echo "succesfully stored";
}
else{
    echo "unsuccesfull!!".$con->error;
}

$con->close();
?>
