
var fnamevalid = false;
var lnamevalid = false;
var contactvalid = false;
var nidvalid = false;
var emailvalid = false;
var passwordvalid = false;
var addvalid = false;
var gendervalid = false;


var PatientRegistration;

//first name validation 

function fnameEmpty() {
    var fname = document.getElementById("fname").value;
    var lent = fname.length;
    var correct_way = /^[A-Za-z]+$/;

    if (fname == "") {
        document.getElementById("fnameMsg").innerHTML = "*field can't be empty!";

        fnamevalid = false;
    }
    if (fname.length <= 3) {
        document.getElementById("fnameMsg").innerHTML = "*Name should be greater than 3 character!";

        fnamevalid = false;
    } else if (!isNaN(fname)) {
        document.getElementById("fnameMsg").innerHTML = "*Only Characters are allowed!";
        fnamevalid = false;
    } else if (fname.match(correct_way)) {
        document.getElementById("fnameMsg").innerHTML = "*Name format is  valid!";
       fnamevalid = true;
    } else {
        fnamevalid = false;
    }


}


function validfname() {
    document.getElementById('fnameMsg').innerHTML = "";

}
 
//last name validation

function lnameEmpty() {
    var lname = document.getElementById("lname").value;
    var lent = lname.length;
    var correct_way = /^[A-Za-z]+$/;

    if (lname == "") {
        document.getElementById("lnameMsg").innerHTML = "*field can't be empty!";

        lnamevalid = false;
    }
    if (lname.length <= 3) {
        document.getElementById("lnameMsg").innerHTML = "*Name should be greater than 3 character!";

        lnamevalid = false;
    } else if (!isNaN(lname)) {
        document.getElementById("lnameMsg").innerHTML = "*Only Characters are allowed!";
        lnamevalid = false;
    } else if (lname.match(correct_way)) {
        document.getElementById("lnameMsg").innerHTML = "*Name format is  valid!";
       lnamevalid = true;
    } else {
        lnamevalid = false;
    }


}


function validlname() {
    document.getElementById('lnameMsg').innerHTML = "";

}
//Contact number validation

function contactEmpty() {
    var contact_number = document.getElementById("contact_number").value;
    if (contact_number == "") {
        document.getElementById("contactMsg").innerHTML = "contact number should not be empty!";
        contactvalid = false;
    }
    if (contact_number.length != 11) {
        document.getElementById("contactMsg").innerHTML = "contact number is in right formate !!";
        contactvalid = false;
    } else {
        contactvalid = true;
    }
}


function validcontact() {
    document.getElementById('contactMsg').innerHTML = "";

}

//nid card validation

function nidEmpty() {
    var nid = document.getElementById("nid").value;
    if (nid == "") {
        document.getElementById("nidMsg").innerHTML = "nid number should not be empty!";
        nidvalid = false;
    }
    if (nid.length != 10) {
        document.getElementById("nidMsg").innerHTML = "nid number is in right formate !!";
        nidvalid = false;
    } else {
        nidvalid = true;
    }
}


function validnid() {
    document.getElementById('Msg').innerHTML = "";

}

//email validation
function emailEmpty() {
    var email = document.getElementById("email").value;

    var email_datas = '' +
        'check_email=' + window.encodeURIComponent('ON') +
        '&emailId=' + window.encodeURIComponent(email);
    let xhttp = new XMLHttpRequest();

    if (email == "") {
        document.getElementById("emailMsg").innerHTML = "  *field can't be empty!";
        emailvalid = false;
    } else if (email.indexOf('@') <= 0) {

        document.getElementById("emailMsg").innerHTML = "  *Invalid @ format!";
        emailvalid = false;
    } else if (email.charAt(email.length - 4) != '.') {
        document.getElementById("emailMsg").innerHTML = "  *Invalid .(dot) position!";
        emailvalid = false;
    } else if (email != "") {

        xhttp.open('POST', '../php/regCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(email_datas);
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("emailMsg").innerHTML = this.responseText;
            } else {
                emailvalid = true;
            }
        }

        emailvalid = false;
    } else {
        emailvalid = true;
    }
}

function validemail() {
    document.getElementById('emailMsg').innerHTML = "";

}



// gender validation

function genderEmpty() {
    if (document.getElementById("Male").checked) {
        gendervalid = true;
    } else if (document.getElementById("Female").checked) {
        gendervalid = true;
    } else if (document.getElementById("Other").checked) {
        gendervalid = true;
    } else {
        document.getElementById("genderMsg").innerHTML = "  *please choose a gender!";
        gendervalid = false;

    }
}

function genderRemover() {
    document.getElementById("genderMsg").innerHTML = "";
}





function validadd() {
    document.getElementById("addMsg").innerHTML = "";

}



//password validation
function PEmpty() {
    var password = document.getElementById("password").value;
    var plength = password.length;
    if (password == "") {
        document.getElementById("passMsg").innerHTML = "*password field can't be empty!";
        window.pvalid = false;

    } else if ((plength < 6) || (plength > 8)) {
        document.getElementById("passMsg").innerHTML = "*password field should between 6 to 8 !";
        window.pvalid = false;

    } else {
        window.pvalid = true; 

    }
}

function pRemover() {
    document.getElementById("passMsg").innerHTML = "";
}




function validation() {
    if (fnamevalid == true && lnamevalid == true && contactvalid == true && nidvalid == true && emailvalid == true &&  passwordvalid == true && gendervalid == true  &&  addvalid == true ) {
        return true;
    } else {
        return false;
    }
}