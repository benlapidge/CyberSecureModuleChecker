<?php
session_start();
include("db_login.php");
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (
    mysqli_connect_errno()
) {
    echo "CONNECTION FAILED" . mysqli_connect_errno();
}

$statement = $connection->prepare("INSERT INTO `grades`(`studentID`, `comp7001Grades`, `comp7001Credits`, `comp7001Mark`,`comp7002Grades`, `comp7002Credits`, `comp7002Mark`,`tech7005Grades`, `tech7005Credits`,`tech7005Mark`, `dalt7002Grades`, `dalt7002Credits`,`dalt7002Mark`, `dalt7011Grades`, `dalt7011Credits`,`dalt7011Mark`, `soft7003Grades`, `soft7003Credits`,`soft7003Mark`, `tech7004Grades`, `tech7004Credits`,`tech7004Mark`, `tech7009Grades`, `tech7009Credits`,`tech7009Mark`,`totalCredits`,`averageGrade`,`numAMark`,`numBMark`,`numCMark`,`numFMark`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$statement->bind_param("iiisiisiisiisiisiisiisiisiiiiii",$UID,
$comp7001Grades,$comp7001Credits,$comp7001Mark,
$comp7002Grades,$comp7002Credits,$comp7002Mark,
$tech7005Grades,$tech7005Credits,$tech7005Mark,
$dalt7002Grades,$dalt7002Credits,$dalt7002Mark,
$dalt7011Grades,$dalt7011Credits,$dalt7011Mark,
$soft7003Grades,$soft7003Credits,$soft7003Mark,
$tech7004Grades,$tech7004Credits,$tech7004Mark,
$tech7009Grades,$tech7009Credits,$tech7009Mark,$totalCredits,$averageGrade,$numAMark,$numBMark,$numCMark,$numFMark);

$UID = $_SESSION['UID'];
//upload to database, pull back from database into array, save to session, use to rebuild upon redirect.
$totalCredits;
$marksArray = array();

$comp7001Credits = $_POST['comp7001-credits'];
$comp7001Grades = $_POST['comp7001-grades'];
$comp7001Mark;

if ($comp7001Grades >= 70){
    $comp7001Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $comp7001Credits;
} else if ($comp7001Grades >= 60) {
    $comp7001Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $comp7001Credits;
} else if ($comp7001Grades >= 50) {
    $comp7001Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $comp7001Credits;
} else {
    $comp7001Mark = "F";
    array_push($marksArray, "F");
}

$comp7002Credits = $_POST['comp7002-credits'];
$comp7002Grades = $_POST['comp7002-grades'];
$comp7002Mark;

if ($comp7002Grades >= 70){
    $comp7002Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $comp7002Credits;
} else if ($comp7002Grades >= 60) {
    $comp7002Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $comp7002Credits;
} else if ($comp7002Grades >= 50) {
    $comp7002Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $comp7002Credits;
} else {
    $comp7002Mark = "F";
    array_push($marksArray, "F");
}

$tech7005Credits = $_POST['tech7005-credits'];
$tech7005Grades = $_POST['tech7005-grades'];
$tech7005Mark;

if ($tech7005Grades >= 70){
    $tech7005Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $tech7005Credits;
} else if ($tech7005Grades >= 60) {
    $tech7005Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $tech7005Credits;
} else if ($tech7005Grades >= 50) {
    $tech7005Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $tech7005Credits;
} else {
    $tech7005Mark = "F";
    array_push($marksArray, "F");
}

$dalt7002Credits = $_POST['dalt7002-credits'];
$dalt7002Grades = $_POST['dalt7002-grades'];
$dalt7002Mark;

if ($dalt7002Grades >= 70){
    $dalt7002Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $dalt7002Credits;
} else if ($dalt7002Grades >= 60) {
    $dalt7002Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $dalt7002Credits;
} else if ($dalt7002Grades >= 50) {
    $dalt7002Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $dalt7002Credits;
} else {
    $dalt7002Mark = "F";
    array_push($marksArray, "F");
}

$dalt7011Credits = $_POST['dalt7011-credits'];
$dalt7011Grades = $_POST['dalt7011-grades'];
$dalt7011Mark;

if ($dalt7011Grades >= 70){
    $dalt7011Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $dalt7011Credits;
} else if ($dalt7011Grades >= 60) {
    $dalt7011Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $dalt7011Credits;
} else if ($dalt7011Grades >= 50) {
    $dalt7011Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $dalt7011Credits;
} else {
    $dalt7011Mark = "F";
    array_push($marksArray, "F");
}

$soft7003Credits = $_POST['soft7003-credits'];
$soft7003Grades = $_POST['soft7003-grades'];
$soft7003Mark;

if ($soft7003Grades >= 70){
    $soft7003Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $soft7003Credits;
} else if ($soft7003Grades >= 60) {
    $soft7003Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $soft7003Credits;
} else if ($soft7003Grades >= 50) {
    $soft7003Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $soft7003Credits;
} else {
    $soft7003Mark = "F";
    array_push($marksArray, "F");
}

$tech7004Credits = $_POST['tech7004-credits'];
$tech7004Grades = $_POST['tech7004-grades'];
$tech7004Mark;

if ($tech7004Grades >= 70){
    $tech7004Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $tech7004Credits;
} else if ($tech7004Grades >= 60) {
    $tech7004Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $tech7004Credits;
} else if ($tech7004Grades >= 50) {
    $tech7004Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $tech7004Credits;
} else {
    $tech7004Mark = "F";
    array_push($marksArray, "F");
}

$tech7009Credits = $_POST['tech7009-credits'];
$tech7009Grades = $_POST['tech7009-grades'];
$tech7009Mark;

if ($tech7009Grades >= 70){
    $tech7009Mark = "A";
    array_push($marksArray, "A");
    $totalCredits += $tech7009Credits;
} else if ($tech7009Grades >= 60) {
    $tech7009Mark = "B";
    array_push($marksArray, "B");
    $totalCredits += $tech7009Credits;
} else if ($tech7009Grades >= 50) {
    $tech7009Mark = "C";
    array_push($marksArray, "C");
    $totalCredits += $tech7009Credits;
} else {
    $tech7005Mark = "F";
    array_push($marksArray, "F");
}

$averageGrade = ($comp7001Grades+$comp7002Grades+$tech7005Grades+$dalt7002Grades+$dalt7011Grades+$soft7003Grades+$tech7004Grades+$tech7009Grades)/8;


$numAMark = count(array_keys($marksArray,"A"));
$numBMark = count(array_keys($marksArray,"B"));
$numCMark = count(array_keys($marksArray,"C"));
$numFMark = count(array_keys($marksArray,"F"));




$statement->execute();



header("location: ../index.php");
mysqli_close($connection);
