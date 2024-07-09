<?php
require 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM car WHERE id = $id";
    $result = $con -> query($sql);

    if ($result){
        //echo "delete successfully";
        header('location:admin_car.php');
    }
    else{
        echo "not deleted".$con->error;
    }
}
$con->close();

?>
