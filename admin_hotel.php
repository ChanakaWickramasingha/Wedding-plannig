<?php
require "config.php";

$sql = "SELECT id,name,address,type,star,image,description,contact FROM hotel_detail";
$result = $con -> query($sql)
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
        .r1{
            background-color:#FF2626;
            border:none;
        }
        .r1:hover{
            transform:scale(1.2);
        }
        .u1{
            background-color:#20E137;
            border:none;
        }
        .u1:hover{
            transform:scale(1.2);
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

    <h3>edit hotel detais</h3>
    <table>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>type</th>
        <th>star</th>
        <th>image</th>
        <th>description</th>
        <th>contact</th>
        <th>option</th>
    <?php
        while($rows = $result -> fetch_assoc())
        {
    ?>

            <tr>
                <td><?php echo $rows['id'] ?>
                <td><?php echo $rows['name'] ?>
                <td><?php echo $rows['address'] ?>
                <td><?php echo $rows['type'] ?>
                <td><?php echo $rows['star'] ?>
                <td><?php echo $rows['image'] ?>
                <td><?php echo $rows['description'] ?>
                <td><?php echo $rows['contact'] ?>
                <td><button class = "r1"><a href = "delete_hotel.php?deleteid=<?php echo $rows['id'];?>">Remove</a></button>
                <button class = "u1">update</button></td>
            </tr>

    <?php
        }
        $con->close()
    ?>
    </table>

</body>
</html>
