<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style/registration.css">
    <script src = "js/checkpass.js"></script>
</head>

<body>
    <form method="POST" action="insertuser.php">
        <h1>Registration</h1>
        <label for="firstName">First Name:</label><br>
        <input type="text" id="firstName" name = "first_name" ><br><br>

        <label for="lastName">Last Name:</label><br>
        <input type="text" id="lastName" name="last_name"><br><br>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="mail"><br><br>

        <label for="mobile">Mobile Number:</label><br>
        <input type="tel" id="mobile" name="mob_Number"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>

        <label for="confirmPassword">Confirm Password:</label><br>
        <span id = "span1"></span>
        <input type="password" id="confirmPassword" name="confirmPassword"><br><br>

        <button class="submit" onclick ="checkpass()">submit</button>
    </form>


</body>

</html>
