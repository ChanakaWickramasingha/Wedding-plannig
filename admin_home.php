<!DOCTYPE html>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .admin-panel {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .admin-panel h2 {
            margin-top: 0;
            font-size: 24px;
            color: #333;
        }
        .admin-panel ol {
            list-style: none;
            padding: 0;
        }
        .admin-panel ol li {
            margin: 10px 0;
        }
        .admin-panel ol li a {
            text-decoration: none;
            color: #007BFF;
            font-size: 18px;
            transition: color 0.3s;
        }
        .admin-panel ol li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class ="admin-panel">
        <h2>Admin Panel</h2>
        <ol>
            <li><a href = "admin_user.php">user details</a></li>
            <li><a href = "admin_hotel.php">Hotel details</li>
            <li><a href = "admin_dress.php">Wedding dress details</a></li>
            <li><a href = "admin_car.php">Wedding car details</a></li>
            <li><a href = "admin_photographer.php">photographers details</a></li>
        </ol>
    </div>
</body>
</html>
