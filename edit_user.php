<?php
require "config.php";

$sql = "SELECT id,first_name,mail FROM registration";
$result = $con -> query($sql);

?>

<!DOCTYPE html>
<head>
    <style>
         h3 {
             text-align:center;
        }
         table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: black;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Update Details</h2>
    <button>user details</button>
    <button>hotel details</button>
    <button>Wedding car details</button>
    <button>Wedding dress details</button>
    <button>photographer details</button>

    <h3>User details</h3>

    <table>
        <th>id</th>
        <th>first name</th>
        <th>Email</th>
        <th>option</th>

        <?php
                while($rows = $result -> fetch_assoc())
                {
        ?>
                <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['first_name']?></td>
                <td><?php echo $rows['mail']?></td>
                <td><button>remove</button></td>
                </tr>
        <?php
                }
            $con ->close()
        ?>

    </table>

</body>
</html>
