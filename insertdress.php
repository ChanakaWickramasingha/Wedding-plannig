<?php
require "config.php";

if(isset($_POST['update'])){
    
    $id = $_POST['shopid'];
    $name = $_POST["shopename"];
    $address =$_POST["address"];
   // $type = $_POST["dress_type"]; type of dress cant change
    $image =$_POST["image"];
    $description =$_POST["description"];
    $contact = $_POST["contact"];

    $sql = "UPDATE wedding_dress SET name='$name',address='$address',image='$image',
            description='$description',contact='$contact' WHERE id='$id'";
    $result = $con->query($sql);
    if($result){
        header('location:admin_dress.php');
    }
    else{
        echo "update is not done!!".$con->error;
    }
}


if(isset($_POST['submit'])){
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
}


$con->close();


?>
