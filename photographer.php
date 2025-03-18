<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "style/photographer.css">
</head>
<body>
<h2>Fill your details</h2>
<form method = "POST" action = "insertphotographer.php">
    <lable for = "studio">studio name:</lable><br>
        <input type = "text" id ="studio" name = "studio" ><br>
        <lable for = "pname">Photographer name</lable><br>
        <input type = "text" id = "pname" name = "pname"><br>

    <lable for = "package">Package</lable>
    <input type = "radio" id ="aulbm" name = "package" value ="aulbm">
    <lable for = "beach">with aulbm</lable>
    <input type = "radio" id ="thank" name = "package" value ="thankYouCard">
    <lable for = "lake"> with Thank you Card</lable>
    <input type = "radio" id ="all" name = "package" value ="all">
    <lable for = "city">All</lable><br><br>


    <lable for = "image">add image</lable><br>
    <input type = "file" id ="image" name = "image"><br>
    <label for ="description">description</lable>
    <input type = "text" id = "description" name = "description">
    <lable for = "contact" >Telphone number</lable><br>
    <input type = "tel" id = "contact" name = "contact"><br>

    <button type = "submit" name = "submit">submit</button>



</form>
</body>
</html>
