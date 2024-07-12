<?php
require "config.php";

if(isset($_POST['update'])){

    $id = $_POST['hotelid'];
    $name = $_POST["hotelname"];
    $address = $_POST["address"];
    //$type = $_POST["type"]; //cant change hotel type !!
    $star = $_POST["star"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $contact = $_POST["contact"];

    $sql = "UPDATE hotel_detail SET name='$name',address='$address',star='$star',
            image='$image',description='$description',contact='$contact' WHERE id = '$id'";
    $result = $con->query($sql);
    if($result){
        echo "update successfully";
        header('location:admin_hotel.php');
    }
    else{
        echo "update is not done!!".$con->error;
    }


}

if(isset($_POST['submit'])){

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

}

$con->close();



?>
