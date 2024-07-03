<?php
require "config.php";
require "header.php";


$sql = "SELECT name,address,dress,image,description,contact FROM wedding_dress";

$result = $con->query($sql);

if($result -> num_rows > 0 ){
    while($row = $result -> fetch_assoc() ){
        echo '<div class="dress-item">';
        echo '<img src="image/' . $row['image'] . '" alt="' . $row['name'] . '">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p><strong>Type of Dress:</strong> ' . $row['dress'] . '</p>';
        echo '<p><strong>Address:</strong> ' . $row['address'] . '</p>';
        echo '<p><strong>Description:</strong> ' . $row['description'] . '</p>';
        echo '<p><strong>Contact:</strong> ' . $row['contact'] . '</p>';
        echo '</div>';

    }
}
else{
    echo "0 result".$con->error;
}

$con->close();

require "footer.php";
?>
<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "style/displaydress.css">
</head>
<body></body>
</html>
