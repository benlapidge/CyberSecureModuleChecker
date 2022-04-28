function validateLoginForm() {
    let studentNum = document.forms["loginForm"]["studentNum"].value;
    let fName = document.forms["loginForm"]["firstName"].value;
    let lName = document.forms["loginForm"]["lastName"].value;
    let pwd = document.forms["loginForm"]["pwd"].value;

    if (studentNum == "" || studentNum.toString().length >8 || studentNum.toString().length <8) {
        alert("Please enter student number");
        return false;
    } else if (fName == "") {
        alert("Please enter first name");
        return false;
    } else if (lName == "") {
        alert("Please enter last name");
        return false;
    } else if (pwd == "") {
        alert("Please enter password");
        return false;
    } else {
        return true;
    }
}


function validateRegisterForm() {
    let studentNum = document.forms["registerForm"]["studentNum"].value;
    let fName = document.forms["registerForm"]["firstName"].value;
    let lName = document.forms["registerForm"]["lastName"].value;
    let pwd = document.forms["registerForm"]["pwd"].value;
    let pwdR = document.forms["registerForm"]["pwdRepeat"].value;

    if (studentNum == "" || studentNum.toString().length >8 || studentNum.toString().length <8 || isNaN(studentNum)) {
        alert("Please enter valid student number");
        return false;
    } else if (fName == "") {
        alert("Please enter first name");
        return false;
    } else if (lName == "") {
        alert("Please enter last name");
        return false;
    } else if (pwd == "" || pwd.toString().length < 12) {
        alert("Password MUST be a minimum of 12 characters long");
        return false;
    } else if (pwd !== pwdR) {
        alert("Passwords must match");
        return false;
    } else {
        return true;
    }
}

function validateGradeForm() {
    let comp7001Credits = document.forms["gradeChecker"]['comp7001-credits'].value;
    let comp7001Grades = document.forms["gradeChecker"]['comp7001-grades'].value;

    let comp7002Credits = document.forms["gradeChecker"]['comp7002-credits'].value;
    let comp7002Grades = document.forms["gradeChecker"]['comp7002-grades'].value;

    let tech7005Credits = document.forms["gradeChecker"]['tech7005-credits'].value;
    let tech7005Grades = document.forms["gradeChecker"]['tech7005-grades'].value;

    let dalt7002Credits = document.forms["gradeChecker"]['dalt7002-credits'].value;
    let dalt7002Grades = document.forms["gradeChecker"]['dalt7002-grades'].value;

    let dalt7011Credits = document.forms["gradeChecker"]['dalt7011-credits'].value;
    let dalt7011Grades = document.forms["gradeChecker"]['dalt7011-grades'].value;

    let soft7003Credits = document.forms["gradeChecker"]['soft7003-credits'].value;
    let soft7003Grades = document.forms["gradeChecker"]['soft7003-grades'].value;
   
    let tech7004Credits = document.forms["gradeChecker"]['tech7004-credits'].value;
    let tech7004Grades = document.forms["gradeChecker"]['tech7004-grades'].value;

    let tech7009Credits = document.forms["gradeChecker"]['tech7009-credits'].value;
    let tech7009Grades = document.forms["gradeChecker"]['tech7009-grades'].value;

    if (comp7001Credits == "" || isNaN(comp7001Credits) || comp7001Credits.toString().length > 2 ||
        comp7002Credits == "" || isNaN(comp7002Credits)|| comp7002Credits.toString().length > 2 || tech7005Credits == "" || isNaN(tech7005Credits)|| tech7005Credits.toString().length > 2 || dalt7002Credits == "" || isNaN(dalt7002Credits)|| dalt7002Credits.toString().length > 2 || dalt7011Credits == "" || isNaN(dalt7011Credits)|| dalt7011Credits.toString().length > 2 || soft7003Credits == "" || isNaN(soft7003Credits)|| soft7003Credits.toString().length > 2 || tech7004Credits == "" || isNaN(tech7004Credits)|| tech7004Credits.toString().length > 2 || tech7009Credits == "" || isNaN(tech7009Credits) || tech7009Credits.toString().length > 2) {
        alert("Please enter all valid credit values into the form");
        return false;
    } 

    if (comp7001Grades == "" || isNaN(comp7001Grades) || comp7001Grades > 100 ||
        comp7002Grades == "" || isNaN(comp7002Grades)|| comp7002Grades > 100 || tech7005Grades == "" || isNaN(tech7005Grades)|| tech7005Grades > 100 || dalt7002Grades == "" || isNaN(dalt7002Grades)|| dalt7002Grades > 100 || dalt7011Grades == "" || isNaN(dalt7011Grades)|| dalt7011Grades > 100 || soft7003Grades == "" || isNaN(soft7003Grades)|| soft7003Grades > 100 || tech7004Grades == "" || isNaN(tech7004Grades)|| tech7004Grades > 100 || tech7009Grades == "" || isNaN(tech7009Grades) || tech7009Grades > 100) {
        alert("Please enter all valid grade values into the form");
        return false;
    } 


}