<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "style/dress.css">
</head>
<body>

<h2>Fill your dress details</h2>
<form method = "POST" action = "insertdress.php">
    <lable for = "shopename">shop name:</lable><br>
        <input type = "text" id ="shopename" name = "shopename" ><br>

    <lable for = "address">Address:</lable><br>
        <input type ="text" id = "address" name = "address"><br>

    <lable for = "type">Type of dress</lable>
    <input type = "radio" id ="western" name = "dress_type" value ="Western">
    <lable for = "western">Western</lable>
    <input type = "radio" id ="srilankan" name = "dress_type" value ="srilankan">
    <lable for = "srilanka"> Sri Lankan</lable>
    <input type = "radio" id ="indian" name = "dress_type" value ="indian">
    <lable for = "indian"> indian </lable><br><br>

    <lable for = "image">add image</lable><br>
    <input type = "file" id ="image" name = "image"><br>
    <label for ="description">description</lable><br>
    <input type = "text" id = "description" name = "description"><br>
    <lable for = "contact" >Telphone number</lable><br>
    <input type = "tel" id = "contact" name = "contact"><br>

    <button type = "submit" name = "submit">submit</button>



</form>

</body>
</html>
