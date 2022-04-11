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
    <title>Results Predictor Login</title>
    <link href="/css/style.css" rel="stylesheet">
    
    
</head>
<?php 
include("header.php");
?>
<body>
    <h2>Login</h2>
    <form name="loginForm" action="functions/loginScript.php" onsubmit="return validateLoginForm()" method="POST">
        Student Number: <input type="text" name = "studentNum" placeholder="16052796"><br>
        First Name: <input type="text" name = "firstName" placeholder="John"><br>
        Last Name: <input type="text" name = "lastName" placeholder="Smith"><br>
        Password: <input type="password" name = "pwd" placeholder="Not 'password'"><br>
        <input type="submit" name="submit" value="Submit"><br/>
        
    </form>
</body>
</html>