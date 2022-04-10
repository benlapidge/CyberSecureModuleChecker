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

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$studentNumber = $_POST['studentNum'];
$pwd = $_POST['pwd'];



function compareCredentials($connection, $firstName, $lastName, $studentNumber, $pwd)
{
    $conn = $connection;
    $query = "SELECT * FROM `users` WHERE studentID = $studentNumber";
    $result = mysqli_query($conn, $query);
    $credentials = mysqli_fetch_array($result);

    if ($credentials['studentID'] === $studentNumber && $credentials['firstName'] === $firstName && $credentials['lastName'] === $lastName && password_verify($pwd,$credentials['pwd'])) {
        return true;
    } else {
        echo "Failed";
        return false;
    }
}

if (compareCredentials($connection, $firstName, $lastName, $studentNumber, $pwd) !== false) {
    $_SESSION["loginstatus"] = true;
    header("location: ../index.php");
}
mysqli_close($connection);
