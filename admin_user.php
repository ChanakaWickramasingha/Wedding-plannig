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
        .r1{
            width:80px;
            height:auto;
            padding:3px;
            border-radius:2px;
            background-color:#FF2626;
            border:none;
        }
        .r1:hover{
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
                <td><button class="r1"><a class = "option" href="user_delete.php?deleteid=<?php echo $rows['id']; ?>">Remove</a></button>
                </td>
                </tr>
        <?php
                }
            $con ->close()
        ?>

    </table>
    <button class = "home"><a class="homelink" href = "admin_home.php">Home</a></button>
</body>
</html>
