<?php
require "config.php";
require "header.php";

$sql = "SELECT brand,type,price,image,description,contact FROM car";
$result = $con-> query($sql);
?>

<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "style/displaycar.css">
</head>
<body>

<h2>Available Vehicles</h2>
<div class="car-listings">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="car">';
            echo '<img src="image/' . $row['image'] . '" alt="Car Image">';
            echo '<h3>' . $row['brand'] . '</h3>';
            echo '<p><strong>Type:</strong> ' . $row['type'] . '</p>';
            echo '<p><strong>Price:</strong> $' . $row['price'] . '</p>';
            echo '<p><strong>Description:</strong> ' . $row['description'] . '</p>';
            echo '<p><strong>Contact:</strong> ' . $row['contact'] . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>No results found! " . $con->error . "</p>";
    }
    ?>
</div>
</body>
</html>

<?php
require "footer.php";

?>
