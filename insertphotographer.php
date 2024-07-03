<?php
require "config.php";

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

$con->close();
?>
