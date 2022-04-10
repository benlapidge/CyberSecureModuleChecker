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

$statement = $connection->prepare("INSERT INTO users (studentID,firstName,lastName,pwd) VALUES (?,?,?,?)");
$statement->bind_param("isss",$studentNumber,$firstName,$lastName,$hashed_pwd);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$studentNumber = $_POST['studentNum'];
$pwd = $_POST['pwd'];
$hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
$statement->execute();

header("location: ../index.php");
mysqli_close($connection);
//TODO update to include registreation features and hashing.