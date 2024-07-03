<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "wed1";

    $con = new mysqli($servername,$username,$password,$database);

    if($con->connect_error)
    {
        die("connection is failed".$con->connect_error);
    }

    echo "connection is successful!!";
?>
