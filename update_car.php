<?php
require 'config.php';
?>


<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "">
</head>
<body>

<h2>update your vehicle details</h2>

<?php
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        $sql = "SELECT id,brand,type,price,image,description,contact FROM car WHERE id='$id'";
        $result = $con->query($sql);

        if($result->num_rows > 0){
            $row = mysqli_fetch_array($result);
            //print_r($row);
            ?>

            <form method = "POST" action = "insertcar.php">
                <lable for = "id"></lable><br>
                <input type = "hidden" id ="id" name = "id" value="<?php echo $row['id']?>" ><br>

                <lable for = "brand">vehicle brand:</lable><br>
                <input type = "text" id ="brand" name = "brand" value="<?php echo $row['brand']?>" ><br>

                <lable for = "cartype">Type of hotel</lable>
                <input type = "radio" id ="suv" name = "cartype"  value="<?php echo $row['type']?>">
                <lable for = "beach">SUV</lable>
                <input type = "radio" id ="car" name = "cartype" value="<?php echo $row['type']?>">
                <lable for = "lake"> CAR</lable>
                <input type = "radio" id ="van" name = "cartype"  value="<?php echo $row['type']?>">
                <lable for = "city">VAN</lable><br><br>

                <lable for = "price">Basic Price</lable><br>
                <input type = "text" id = "price" name = "price" value="<?php echo $row['price']?>"><br>

                <lable for = "image">add image</lable><br>
                <input type = "file" id ="image" name = "image" value="<?php echo $row['image']?>"><br>

                <label for ="description">description</lable>
                <input type = "text" id = "description" name = "description" value="<?php echo $row['description']?>">

                <lable for = "contact" >Telphone number</lable><br>
                <input type = "tel" id = "contact" name = "contact" value="<?php echo $row['contact']?>"><br>

                <button type = "submit" name="update">submit</button>

            </form>


<?php

        }
        else{
            echo "id is not found";
        }

    }
?>

</body>
</html>
