<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "style/car.css">
</head>
<body>

<h2>Fill your vehicle details</h2>
<form method = "POST" action = "insertcar.php">
    <lable for = "brand">vehicle brand:</lable><br>
        <input type = "text" id ="brand" name = "brand" ><br>

    <lable for = "cartype">Type of hotel</lable>
    <input type = "radio" id ="suv" name = "cartype" value ="suv">
    <lable for = "beach">SUV</lable>
    <input type = "radio" id ="car" name = "cartype" value ="car">
    <lable for = "lake"> CAR</lable>
    <input type = "radio" id ="van" name = "cartype" value ="van">
    <lable for = "city">VAN</lable><br><br>

    <lable for = "price">Basic Price</lable><br>
    <input type = "text" id = "price" name = "price"><br>
    <lable for = "image">add image</lable><br>
    <input type = "file" id ="image" name = "image"><br>
    <label for ="description">description</lable>
    <input type = "text" id = "description" name = "description">
    <lable for = "contact" >Telphone number</lable><br>
    <input type = "tel" id = "contact" name = "contact"><br>

    <button type = "submit" name ="submit">submit</button>



</form>

</body>
</html>
