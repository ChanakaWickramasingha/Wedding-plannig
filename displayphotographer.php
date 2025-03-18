<?php
require "config.php";
require "header.php";

$sql = "SELECT sname,pname,package,image,description,contact FROM photographer";
$result = $con -> query($sql)



?>
<!DOCTYPE html>
<head>
    <link rel = "stylesheet" href = "style/displayphotographer.css">
</head>
<body>

<h1>Photographer Details</h1>
<div class="photographer-list">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="photographer-container">';
            echo '<img src="image/' . $row["image"] . '" alt="' . $row["sname"] . '">';
            echo '<h2>' . $row["sname"] . '</h2>';
            echo '<p><strong>Photographer Name:</strong> ' . $row["pname"] . '</p>';
            echo '<p><strong>Package:</strong> ' . $row["package"] . '</p>';
            echo '<p><strong>Description:</strong> ' . $row["description"] . '</p>';
            echo '<p><strong>Contact:</strong> ' . $row["contact"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>No results found!</p>";
    }
    $con->close();
    ?>
</div>

</body>
</html>

<?php
require "footer.php";
?>
