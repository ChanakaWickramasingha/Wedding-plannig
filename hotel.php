<!DOCTYPE html>
<head>
    <link rel ="stylesheet" href = "style/hotel.css">
</head>
<body>

<h2>Fill your hotel details</h2>
<form method = "POST" action = "inserthotel.php">
    <lable for = "hotelname">Hotel name:</lable><br>
        <input type = "text" id ="hotelname" name = "hotelname" ><br>

    <lable for = "address">Address:</lable><br>
        <input type ="text" id = "address" name = "address"><br>

    <lable for = "type">Type of hotel</lable>
    <input type = "radio" id ="beach" name = "type" value ="beach side">
    <lable for = "beach">beach hotel</lable>
    <input type = "radio" id ="lake" name = "type" value ="lake side">
    <lable for = "lake"> lake hotel</lable>
    <input type = "radio" id ="city" name = "type" value ="city side">
    <lable for = "city">city hotel</lable><br><br>

    <lable for = "star">Select star count</lable><br>
    <input type = "text" id = "star" name = "star"><br>
    <lable for = "image">add image</lable><br>
    <input type = "file" id ="image" name = "image"><br>
    <label for ="description">description</lable>
    <input type = "text" id = "description" name = "description">
    <lable for = "contact" >Telphone number</lable><br>
    <input type = "tel" id = "contact" name = "contact"><br>

    <button value = "submit">submit</button>



</form>

</body>
</html>
