<?php
require "config.php";
$sql= "SELECT id,sname,pname,package,image,description,contact FROM photographer";
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

    <h3>edit photographer details</h3>
    <table>
        <th>id</th>
        <th>sname</th>
        <th>pname</th>
        <th>package</th>
        <th>image</th>
        <th>description</th>
        <th>contact</th>
        <th>option</th>
    <?php
        while($rows = $result -> fetch_assoc())
        {
    ?>

    <tr>
        <td><?php echo $rows['id']?></td>
        <td><?php echo $rows['sname']?></td>
        <td><?php echo $rows['pname']?></td>
        <td><?php echo $rows['package']?></td>
        <td><?php echo $rows['image']?></td>
        <td><?php echo $rows['description']?></td>
        <td><?php echo $rows['contact']?></td>
        <td><button class = "r1"><a href = "delete_photographer.php?deleteid=<?php echo $rows['id']?>">Remove</a></button>
        <button class = "u1">Update</button></td>
    </tr>

    <?php
        }
    ?>



    </table>
</body>
</html>
