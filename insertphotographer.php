<?php
require "config.php";

if(isset($_POST['update'])){

    $id = $_POST['studid'];
    $studio = $_POST['studio'];
    $pname = $_POST['pname'];
    //$package = $_POST['package']; package cant change after the initilized.
    $image = $_POST['image'];
    $description = $_POST['description'];
    $phone = $_POST['contact'];

    $sql = "UPDATE photographer SET sname='$studio',pname='$pname',image='$image',description='$description',
            contact='$phone' WHERE id='$id'";

    $result = $con->query($sql);
    if($result){
        //echo "successful!!";
        header('location:admin_photographer.php');
    }
    else{
        echo "update is not done!!".$con->error;
    }
}

if(isset($_POST['submit'])){

    $studio = $_POST['studio'];
    $pname = $_POST['pname'];
    $package = $_POST['package'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $phone = $_POST['contact'];

    $sql = "INSERT INTO photographer(sname,pname,package,image,description,contact)
            VALUES ('$studio','$pname','$package','$image','$description','$phone')";

    if($con->query($sql)){
        echo "successful saved!!";
    }
    else{
        echo "unsuccesful!!".$con->error;
    }

}

$con->close();
?>
