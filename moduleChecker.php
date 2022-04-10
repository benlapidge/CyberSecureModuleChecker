
<?php
echo '<h2>Grade Checker</h2>';
echo '<h3>Please enter your grades here</h3>';
echo '<script src="js/validateForm.js"></script>';
echo '<form name="gradeChecker" action="functions/gradeCheck.php" onsubmit="return validateGradeForm()" method="POST">';
echo 'First Course: <input type="text" name = "studentNum" placeholder="1-100"><br>';
echo 'Second Course: <input type="text" name = "firstName" placeholder="1-100"><br>';
echo 'Third Course: <input type="text" name = "lastName" placeholder="1-100"><br>';
echo 'Final Course: <input type="text" name = "pwd" placeholder="1-100"><br>';
echo '<input type="submit" name="submit" value="Submit"><br/>';
?>
