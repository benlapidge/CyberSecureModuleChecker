<?php
session_start();
if (!isset($_SESSION['loginstatus'])){
    $_SESSION['loginstatus'] = false;
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
<?php 
include("header.php");
?>
<body>
<main>
    <section>
        
<?php
if ($_SESSION['loginstatus'] == true){
    echo "<p>Welcome, ".$_SESSION['name']."!</p>";
    include("moduleChecker.php");
} else {
    echo "<h1>Module Checker</h1>";
    echo "<p>Please log in to continue</p>";
}
?>
<br>

    </section>
</main>
<?php 
include("footer.php");
?>

</body>
</html>