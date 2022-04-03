<?php
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
<body>
    <h2>Login</h2>
    <form action="functions/loginScript.php" method="POST">
        Student Number: <input type="text" name = "studentNum" placeholder="16052796"><br>
        First Name: <input type="text" name = "firstName" placeholder="John"><br>
        Last Name: <input type="text" name = "lastName" placeholder="Smith"><br>
        Password: <input type="text" name = "pwd" placeholder="Not 'password'"><br>
        <input type="submit" name="submit" placeholder="Submit Form"><br />
    </form>
</body>
</html>