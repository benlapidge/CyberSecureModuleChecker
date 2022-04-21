<?php
include("functions/db_login.php");
$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (
    mysqli_connect_errno()
) {
    echo "CONNECTION FAILED" . mysqli_connect_errno();
}

echo '<h2>Your Grades</h2>';
//checks if logged in user already has their grades in the database
$statement = $connection->prepare("SELECT comp7001Grades, comp7001Credits,comp7001Mark,comp7002Grades,comp7002Credits, comp7002Mark,tech7005Grades,tech7005Credits,tech7005Mark, dalt7002Grades,dalt7002Credits,dalt7002Mark,dalt7011Grades, dalt7011Credits,dalt7011Mark,soft7003Grades,soft7003Credits,soft7003Mark,tech7004Grades,tech7004Credits,tech7004Mark, tech7009Grades,tech7009Credits,tech7009Mark,totalCredits,averageGrade,numAMark,numBMark,numCMark,numFMark FROM grades WHERE studentID=?");
$statement->bind_param("i",$UID);
$UID = $_SESSION['UID'];
$statement->execute();
$result = $statement->get_result();
$data = $result->fetch_assoc();


// print table with values extracted from database

echo '<table>';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Module</th>';
            echo '<th>Credits</th>';
            echo '<th>Grade</th>';
            echo '<th>Mark</th>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
        echo '<tr>';
            echo '<td>COMP 7001: Object Oriented Programming</td>';
            if ($data['comp7001Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['comp7001Credits'].'<br></td>';
            }
            echo '<td>'.$data['comp7001Grades'].'<br></td>';
            echo '<td>'.$data['comp7001Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>COMP 7002: Modern Computer Systems</td>';
            if ($data['comp7002Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['comp7002Credits'].'<br></td>';
            }
            echo '<td>'.$data['comp7002Grades'].'<br></td>';
            echo '<td>'.$data['comp7002Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7005: Research, Scholarship and Professional Skills</td>';
            if ($data['tech7005Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['tech7005Credits'].'<br></td>';
            }
            echo '<td>'.$data['tech7005Grades'].'<br></td>';
            echo '<td>'.$data['tech7005Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>DALT 7002: Data Science Foundations</td>';
            if ($data['dalt7002Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['dalt7002Credits'].'<br></td>';
            }
            echo '<td>'.$data['dalt7002Grades'].'<br></td>';
            echo '<td>'.$data['dalt7002Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>DALT 7011: Introduction to Machine Learning</td>';
            if ($data['dalt7011Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['dalt7011Credits'].'<br></td>';
            }
            echo '<td>'.$data['dalt7011Grades'].'<br></td>';
            echo '<td>'.$data['tech7005Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>SOFT 7003: Advanced Software Development</td>';
            if ($data['soft7003Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['soft7003Credits'].'<br></td>';
            }
            echo '<td>'.$data['soft7003Grades'].'<br></td>';
            echo '<td>'.$data['soft7003Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7004: Cyber Security and the Web</td>';
            if ($data['tech7004Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['tech7004Credits'].'<br></td>';
            }
            echo '<td>'.$data['tech7004Grades'].'<br></td>';
            echo '<td>'.$data['tech7004Mark'].'<br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7009: MSc Dissertation in Computing Subjects</td>';
            if ($data['tech7009Mark'] == 'F'){
                echo '<td>No credits awarded<br></td>';    
            } else {
                echo '<td>'.$data['tech7009Credits'].'<br></td>';
            }
            echo '<td>'.$data['tech7009Grades'].'<br></td>';
            echo '<td>'.$data['tech7009Mark'].'<br></td>';
        echo '</tr>';
    echo '</tbody>';
echo '</table>';

echo "<h3>You recieved:</h3>";
echo "<br>";
echo "<p>".$data['numAMark']." A-grades.</p>";
echo "<br>";
echo "<p>".$data['numBMark']." B-grades.</p>";
echo "<br>";
echo "<p>".$data['numCMark']." C-grades.</p>";
echo "<br>";
echo "<p>".$data['numFMark']." Failed Modules.</p>";
echo "<br>";
echo "<p>"."Your average mark was: ".$data['averageGrade']."</p>";
echo "<br>";
echo "<p>"."Your total credits was: ".$data['totalCredits']."</p>";
echo "<br>";
if ($data['totalCredits'] >= 180){
    echo "<p>"."You have recieved an MSc in Computing Science"."</p>";
    echo "<br>";
} else if ($data['totalCredits'] >= 120) {
    echo "<p>"."You have recieved a: PG Diploma in Computing Science"."</p>";
    echo "<br>";
} else {
    echo "<p>"."You have not been awarded any qualification"."</p>";
    echo "<br>";
}

if ($data['averageGrade']>=70 && $data['tech7009Grades']>=68){
    echo "<p>"."You have been awarded with a Distinction"."</p>";
    echo "<br>";
} else if ($data['averageGrade']>=70 && $data['tech7009Grades']<=58){
    echo "<p>"."You have been awarded with a Merit"."</p>";
    echo "<br>";
} else if ($data['averageGrade']>=60 && $data['tech7009Grades']>=58){
    echo "<p>"."You have been awarded with a Merit"."</p>";
    echo "<br>"; 
} else if ($data['averageGrade']<60){
    echo "<p>"."You have been awarded with a Pass"."</p>";
    echo "<br>";
}


echo '<h3><a href="functions/reset.php">Reset</a></h3>';
?>
