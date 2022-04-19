<?php
session_start();
include("db_login.php");
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (
    mysqli_connect_errno()
) {
    echo "CONNECTION FAILED" . mysqli_connect_errno();
}

$statement = $connection->prepare("INSERT INTO `grades`(`studentID`, `comp7001Grades`, `comp7001Credits`, `comp7002Grades`, `comp7002Credits`, `tech7005Grades`, `tech7005Credits`, `dalt7002Grades`, `dalt7002Credits`, `dalt7011Grades`, `dalt7011Credits`, `soft7003Grades`, `soft7003Credits`, `tech7004Grades`, `tech7004Credits`, `tech7009Grades`, `tech7009Credits`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$statement->bind_param("iiiiiiiiiiiiiiiii",$UID,$comp7001Grades,$comp7001Credits,
$comp7002Grades,$comp7002Credits,
$tech7005Grades,$tech7005Credits,
$dalt7002Grades,$dalt7002Credits,
$dalt7011Grades,$dalt7011Credits,
$soft7003Grades,$soft7003Credits,
$tech7004Grades,$tech7004Credits,
$tech7009Grades,$tech7009Credits);

$UID = $_SESSION['UID'];
//upload to database, pull back from database into array, save to session, use to rebuild upon redirect.
$comp7001Credits = $_POST['comp7001-credits'];
$comp7001Grades = $_POST['comp7001-grades'];

$comp7002Credits = $_POST['comp7002-credits'];
$comp7002Grades = $_POST['comp7002-grades'];

$tech7005Credits = $_POST['tech7005-credits'];
$tech7005Grades = $_POST['tech7005-grades'];

$dalt7002Credits = $_POST['dalt7002-credits'];
$dalt7002Grades = $_POST['dalt7002-grades'];

$dalt7011Credits = $_POST['dalt7011-credits'];
$dalt7011Grades = $_POST['dalt7011-grades'];

$soft7003Credits = $_POST['soft7003-credits'];
$soft7003Grades = $_POST['soft7003-grades'];

$tech7004Credits = $_POST['tech7004-credits'];
$tech7004Grades = $_POST['tech7004-grades'];

$tech7009Credits = $_POST['tech7009-credits'];
$tech7009Grades = $_POST['tech7009-grades'];

$statement->execute();



header("location: ../index.php");
mysqli_close($connection);
