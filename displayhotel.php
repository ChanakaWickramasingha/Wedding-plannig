<?php
require "config.php";
require "header.php";

$sql = "SELECT name, address, type, star, image, description, contact FROM hotel_detail";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Details</title>
    <link rel="stylesheet" href="style/displayhotel.css">
</head>
<body>

<h1>Hotel Details</h1>
<div class="hotel-list">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="hotel-container">';
            echo '<img src="image/' . $row["image"] . '" alt="' . $row["name"] . '">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<p><strong>Address:</strong> ' . $row["address"] . '</p>';
            echo '<p><strong>Type:</strong> ' . $row["type"] . '</p>';
            echo '<p><strong>Star Rating:</strong> ' . $row["star"] . '</p>';
            echo '<p><strong>Overview:</strong> ' . $row["description"] . '</p>';
            echo '<p><strong>Contact:</strong> ' . $row["contact"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>No results found!</p>";
    }
    $con->close();
    ?>
</div>

<?php require "footer.php"; ?>

</body>
</html>
