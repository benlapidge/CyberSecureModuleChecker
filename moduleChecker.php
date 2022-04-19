
<?php
echo '<h2>Grade Checker</h2>';
echo '<h3>Please enter your grades here</h3>';
echo '<script src="js/validateForm.js"></script>';

echo '<form name="gradeChecker" action="functions/gradeCheck.php" onsubmit="return validateGradeForm()" method="POST">';


echo '<table>';
    echo '<thead>';
        echo '<tr>';
            echo '<th>Module</th>';
            echo '<th>Credits</th>';
            echo '<th>Grade</th>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
        echo '<tr>';
            echo '<td>COMP 7001: Object Oriented Programming</td>';
            echo '<td><input type="text" form="gradeChecker" name = "comp7001-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "comp7001-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>COMP 7002: Modern Computer Systems</td>';
            echo '<td><input type="text" form="gradeChecker" name = "comp7002-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "comp7002-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7005: Research, Scholarship and Professional Skills</td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7005-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7005-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>DALT 7002: Data Science Foundations</td>';
            echo '<td><input type="text" form="gradeChecker" name = "dalt7002-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "dalt7002-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>DALT 7011: Introduction to Machine Learning</td>';
            echo '<td><input type="text" form="gradeChecker" name = "dalt7011-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "dalt7011-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>SOFT 7003: Advanced Software Development</td>';
            echo '<td><input type="text" form="gradeChecker" name = "soft7003-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "soft7003-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7004: Cyber Security and the Web</td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7004-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7004-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td>TECH 7009: MSc Dissertation in Computing Subjects</td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7009-credits" placeholder="1-100"><br></td>';
            echo '<td><input type="text" form="gradeChecker" name = "tech7009-grades" placeholder="1-100"><br></td>';
        echo '</tr>';
    echo '</tbody>';
echo '</table>';
echo '<input type="submit" form="gradeChecker" name="submit" value="Submit"><br/>';

?>
