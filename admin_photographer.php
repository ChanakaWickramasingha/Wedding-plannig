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
            width:80px;
            height:auto;
            padding:3px;
            background-color:#FF2626;
            border:none;
        }
        .r1:hover{
            transform:scale(1.2);
        }
        .u1{
            width:80px;
            height:auto;
            padding:3px;
            background-color:#20E137;
            border:none;
        }
        .u1:hover{
            transform:scale(1.2);
        }
        .home{
            width:70px;
            height:40px;
            background-color:#C093F3;
            border:none;
            border-radius:5px;
            margin-left:600px;

        }
        .homelink{
            text-decoration: none;
            color:black;
            font-weight:bold;
        }
        .home:hover{
            background-color:#AF73F1;
        }
        .option{
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
<h2>Update Details</h2>
    

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
        <td><button class = "r1"><a class = "option" href = "delete_photographer.php?deleteid=<?php echo $rows['id']?>">Remove</a></button>
        <button class = "u1"><a class = "option" href = "update_photographer.php?updateid=<?php echo $rows['id'];?>">Update</a></button></td>
    </tr>

    <?php
        }
    ?>



    </table>
    <button class = "home"><a class="homelink" href = "admin_home.php">Home</a></button>
</body>
</html>
