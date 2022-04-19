<?php
session_start();
include("db_login.php");
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (
    mysqli_connect_errno()
) {
    echo "CONNECTION FAILED" . mysqli_connect_errno();
}
$statement = $connection->prepare("DELETE FROM grades WHERE studentID=?");
$statement->bind_param("i",$UID);
$UID = $_SESSION['UID'];
$statement->execute();
header("location: ../index.php");
?>