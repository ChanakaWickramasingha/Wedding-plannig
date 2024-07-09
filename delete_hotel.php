<?php
require 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM hotel_detail WHERE id = $id";
    $result = $con -> query($sql);

    if ($result){
        //echo "delete successfully";
        header('loaction:admin_hotel.php');
    }
    else{
        echo "not deleted";
    }
}
$con->close();

?>
