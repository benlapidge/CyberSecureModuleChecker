<?php
session_start();
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
        <h1>Module Checker</h1>
<?php
if ($_SESSION['loginstatus'] == true){
    echo "Welcome, ".$_SESSION['name']."!";
    include("moduleChecker.php");
} else {
    echo "Please log in to continue";
}
?>
    </section>
</main>
    <footer>
        <?php
        echo "<br>";
echo "<h2>[DIAGNOSTICS]</h2>";
print_r($_SESSION);
        ?>
    </footer>

</body>
</html>