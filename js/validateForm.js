function validateLoginForm() {
    let studentNum = document.forms["loginForm"]["studentNum"].value;
    let fName = document.forms["loginForm"]["firstName"].value;
    let lName = document.forms["loginForm"]["lastName"].value;
    let pwd = document.forms["loginForm"]["pwd"].value;

    if (studentNum == "") {
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

    if (studentNum == "") {
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
    } else if (pwd !== pwdR) {
        alert("Passwords must match");
        return false;
    } else {
        return true;
    }
}