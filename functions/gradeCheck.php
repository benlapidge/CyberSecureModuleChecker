<?php
session_start();
include("db_login.php");
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (
    mysqli_connect_errno()
) {
    echo "CONNECTION FAILED" . mysqli_connect_errno();
} else {
    echo "CONNECTION ESTABLISHED";
}

$oop = $_POST['comp7001-grades'];

echo $oop;