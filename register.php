<?php
session_start();
include("functions/db_login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Predictor Register</title>
    <link href="/css/style.css" rel="stylesheet">
    
</head>
<body>
    <h2>Login</h2>
    <script src="js/validateForm.js"></script>
    <form name="registerForm" action="functions/registerScript.php" onsubmit="return validateRegisterForm()" method="POST">
        Student Number: <input type="text" name = "studentNum" placeholder="16052796"><br>
        First Name: <input type="text" name = "firstName" placeholder="John"><br>
        Last Name: <input type="text" name = "lastName" placeholder="Smith"><br>
        Password: <input type="password" name = "pwd" placeholder="Not 'password'"><br>
        Password: <input type="password" name = "pwdRepeat" placeholder="Confirm Password'"><br>
        <input type="submit" name="submit" value="Submit"><br/>
    </form>
</body>
</html>