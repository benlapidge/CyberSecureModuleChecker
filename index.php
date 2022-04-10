<?php
session_start();
?>
<?php
$_SESSION["loginstatus"];

if (!isset($_SESSION["loginstatus"])){
    $_SESSION["loginstatus"] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results Predictor</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<header>
    <nav>
        <ul>
            <?php
            if ($_SESSION["loginstatus"]!== true){
                echo '<li>';
                echo '<a href="/login.php">Login</a>';
                echo '</li>';
            } ?>
            
            <li>
                <a href="/register.php">Register</a>
            </li>
            <li>
                <a href="http://192.168.64.2/phpmyadmin">PHPMyAdmin</a>
            </li>
            <?php
            if ($_SESSION["loginstatus"]== true){
                echo '<li>';
                echo '<a href="functions/logout.php">Logout</a>';
                echo '</li>';
            } ?>
        </ul>
    </nav>
</header>
<main>
    <section>
        <h1>Module Checker</h1>
<?php
if ($_SESSION['loginstatus'] == true){
    echo "You are now logged in";
    include("moduleChecker.php");
} else {
    echo "Please log in to continue";
}
?>
    </section>
</main>
    

</body>
</html>