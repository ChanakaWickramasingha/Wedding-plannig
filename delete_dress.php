<?php
require "config.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql ="DELETE FROM wedding_dress WHERE id = $id";
    $result = $con->query($sql);

    if($result){
        //echo "deleted successfully";
        header('location:admin_dress.php');
    }
    else{
        echo "not deleted".$con->error;
    }
}
$con->close();
?>
