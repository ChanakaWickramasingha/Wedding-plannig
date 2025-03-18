<?php
require 'config.php';
?>



<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "">
</head>
<body>

<h2>Update hotel details</h2>

<?php
if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM hotel_detail WHERE id='$id'";
    $result = $con->query($sql);

    if($row = $result->num_rows > 0){
        $row = mysqli_fetch_array($result);
        //print_r($result);
?>

    <form method = "POST" action = "inserthotel.php">

        <lable for = "hotelid"></lable><br>
        <input type = "hidden" id ="hotelid" name = "hotelid" value="<?php echo $row['id']?>"><br>

        <lable for = "hotelname">Hotel name:</lable><br>
        <input type = "text" id ="hotelname" name = "hotelname" value="<?php echo $row['name']?>"><br>

        <lable for = "address">Address:</lable><br>
        <input type ="text" id = "address" name = "address" value="<?php echo $row['address']?>"><br>

        <lable for = "type">Type of hotel</lable>
        <input type = "radio" id ="beach" name = "type" value ="beach side" value="<?php echo $row['type']?>">
        <lable for = "beach">beach hotel</lable>
        <input type = "radio" id ="lake" name = "type" value ="lake side" value="<?php echo $row['type']?>">
        <lable for = "lake"> lake hotel</lable>
        <input type = "radio" id ="city" name = "type" value ="city side" value="<?php echo $row['type']?>">
        <lable for = "city">city hotel</lable><br><br>

        <lable for = "star">Select star count</lable><br>
        <input type = "text" id = "star" name = "star" value="<?php echo $row['star']?>"><br>

        <lable for = "image">add image</lable><br>
        <input type = "file" id ="image" name = "image" value="<?php echo $row['image']?>"><br>

        <label for ="description">description</lable>
        <input type = "text" id = "description" name = "description" value="<?php echo $row['description']?>">

        <lable for = "contact" >Telphone number</lable><br>
        <input type = "tel" id = "contact" name = "contact" value="<?php echo $row['contact']?>"><br>

        <button type = "submit" name = "update">update</button>
    </form>

<?php

    }
    else{
        echo "result is 0";
    }
}

?>




</body>
</html>
