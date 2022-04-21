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
<?php 
include("header.php");
?>
<body>
    <h2>Register</h2>
    <script src="js/validateForm.js"></script>
    <form name="registerForm" action="functions/registerScript.php" onsubmit="return validateRegisterForm()" method="POST">
        Student Number: <input type="text" name = "studentNum" placeholder="Enter your 8-digit student number"><br>
        First Name: <input type="text" name = "firstName" placeholder="Enter your first name here"><br>
        Last Name: <input type="text" name = "lastName" placeholder="Enter your last name here"><br>
        Password: <input type="password" name = "pwd" placeholder="Must be a minimum of 12 characters"><br>
        Password: <input type="password" name = "pwdRepeat" placeholder="Confirm Password'"><br>
        <input type="submit" name="submit" value="Submit"><br/>
    </form>
</body>
</html>