<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style/loginForm.css">

</head>
<body>
    <div class="div1">
        <h1 class="h1">Login</h1>
        <form method = "POST" action = "loginDetails.php">
            <fieldset>
                E-mail:
                <input type="email" id = "email" name = "email"><br>
                Password:
                <input type="password" id = "password" name = "password"><br>
            </fieldset>
            <button id = "login">Log In</button>
        </form>
    </div>
</body>
</html>
