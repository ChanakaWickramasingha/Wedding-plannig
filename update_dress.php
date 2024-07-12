<?php
require 'config.php';

?>

<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "">
</head>
<body>

<h2>update dresses details</h2>
<?php
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM wedding_dress WHERE id ='$id'";
        $result = $con->query($sql);

        if($row = $result->num_rows >0){
            $row = mysqli_fetch_array($result);
            //print_r($row);
?>

    <form method = "POST" action = "insertdress.php">

        <lable for = "shopid"></lable><br>
        <input type = "hidden" id ="shopid" name = "shopid" value="<?php echo $row['id'];?>" ><br>

        <lable for = "shopename">shop name:</lable><br>
        <input type = "text" id ="shopename" name = "shopename" value="<?php echo $row['name'];?>" ><br>

        <lable for = "address">Address:</lable><br>
        <input type ="text" id = "address" name = "address" value="<?php echo $row['address'];?>" ><br>

        <lable for = "image">add image</lable><br>
        <input type = "file" id ="image" name = "image" value="<?php echo $row['image'];?>" ><br>
        <label for ="description">description</lable><br>
        <input type = "text" id = "description" name = "description" value="<?php echo $row['description'];?>" ><br>
        <lable for = "contact" >Telphone number</lable><br>
        <input type = "tel" id = "contact" name = "contact" value="<?php echo $row['contact'];?>" ><br>

        <button type = "submit" name = "update">submit</button>
    </form>

 <?php
        }
    }

?>

</body>
</html>
