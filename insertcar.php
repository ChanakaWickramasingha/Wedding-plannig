<?php
require "config.php";

if(isset($_POST['update'])){

    //$id = $_GET['updateid'];
    $id = $_POST['id'];

    $brand = $_POST["brand"];
    //$type = $_POST["cartype"]; user cant change the vehicle type
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $contact = $_POST["contact"];

    $sql = "UPDATE car SET brand='$brand',price='$price',image='$image',description='$description',
            contact='$contact' WHERE id='$id'";

    $result = $con->query($sql);

    if($result){
        echo "update successfully";
        header('location:admin_car.php');
    }
    else{
        echo "not updated".$con->error;
    }

}


if(isset($_POST['submit'])){
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
}


$con->close();
?>
