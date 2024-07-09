<?php
require 'config.php';

if (isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM registration WHERE id = $id";
    $result = $con -> query($sql);

    if($result){
        //echo "deleted successfully";
        header('location:admin_user.php');

    }
    else{
        echo "not deleted".$con->error;
    }

}
$con->close()
?>
