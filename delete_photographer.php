<?php
require 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM photographer WHERE id=$id";

    $result = $con -> query($sql);
    if($result){
        header('location:admin_photographer.php');
    }
    else{
        echo "not deleted".$con->error;
    }
}
$con->close();
?>
