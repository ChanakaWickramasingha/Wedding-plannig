<?php
require 'config.php';

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
    $sql = "SELECT * FROM photographer WHERE id ='$id'";
    $result = $con->query($sql);

    if($row = $result->num_rows >0){
        $row = mysqli_fetch_array($result);
        //print_r($result);

?>
    <!DOCTYPE html>
    <head>
    <link rel = "stylesheet" href = "">
    </head>
    <body>
    <h2>update your details</h2>
    <form method = "POST" action = "insertphotographer.php">

        <lable for = "studid"></lable><br>
        <input type = "hidden" id ="studid" name = "studid" value ="<?php echo $row['id'];?>"><br>

        <lable for = "studio">studio name:</lable><br>
        <input type = "text" id ="studio" name = "studio" value ="<?php echo $row['sname'];?>"><br>

        <lable for = "pname">Photographer name</lable><br>
        <input type = "text" id = "pname" name = "pname" value ="<?php echo $row['pname'];?>"><br>

        <lable for = "image">add image</lable><br>
        <input type = "file" id ="image" name = "image" value ="<?php echo $row['image']?>"><br>

        <label for ="description">description</lable>
        <input type = "text" id = "description" name = "description" value ="<?php echo $row['description']?>">
        
        <lable for = "contact" >Telphone number</lable><br>
        <input type = "tel" id = "contact" name = "contact" value ="<?php echo $row['contact']?>"><br>

        <button type = "submit" name ="update">update</button>

    </form>
<?php
    }
}

?>

</body>
</html>
