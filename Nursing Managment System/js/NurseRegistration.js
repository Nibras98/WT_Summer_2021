var namevalid = false;
var contactvalid = false;
var idvalid = false;
var hnamevalid = false;
var hidvalid = false;
var emailvalid = false;
var passwordvalid = false;
var gendervalid = false;
var addvalid = false;

var NurseRegistration;

// name validation 

function nameEmpty() {
    var name = document.getElementById("name").value;
    var lent = name.length;
    var correct_way = /^[A-Za-z]+$/;

    if (name == "") {
        document.getElementById("nameMsg").innerHTML = "*field can't be empty!";

        namevalid = false;
    }
    if (name.length <= 3) {
        document.getElementById("nameMsg").innerHTML = "*Name should be greater than 3 character!";

        namevalid = false;
    } else if (!isNaN(fname)) {
        document.getElementById("nameMsg").innerHTML = "*Only Characters are allowed!";
        namevalid = false;
    } else if (name.match(correct_way)) {
        document.getElementById("nameMsg").innerHTML = "*Name format is  valid!";
       namevalid = true;
    } else {
        namevalid = false;
    }


}


function validname() {
    document.getElementById('nameMsg').innerHTML = "";

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

//id number validation

function idEmpty() {
    var id = document.getElementById("id").value;
    if (id == "") {
        document.getElementById("idMsg").innerHTML = "id number should not be empty!";
        idvalid = false;
    }
    if (id.length != 10) {
        document.getElementById("idMsg").innerHTML = "id number is correct !!";
        idvalid = false;
    } else {
        idvalid = true;
    }
}


function validid() {
    document.getElementById('Msg').innerHTML = "";

}
 
//hname validation

function hnameEmpty() {
    var hname = document.getElementById("hname").value;
    var lent = hname.length;
    var correct_way = /^[A-Za-z]+$/;

    if (hname == "") {
        document.getElementById("hnameMsg").innerHTML = "*field can't be empty!";

        hnamevalid = false;
    }
    if (hname.length <= 3) {
        document.getElementById("hnameMsg").innerHTML = "*Name should be greater than 3 character!";

        hnamevalid = false;
    } else if (!isNaN(hname)) {
        document.getElementById("hnameMsg").innerHTML = "*Only Characters are allowed!";
        hnamevalid = false;
    } else if (hname.match(correct_way)) {
        document.getElementById("hnameMsg").innerHTML = "*Name format is  valid!";
       hnamevalid = true;
    } else {
        hnamevalid = false;
    }


}


function validhname() {
    document.getElementById('hnameMsg').innerHTML = "";

}

//hid number validation

function hidEmpty() {
    var hid = document.getElementById("hid").value;
    if (hid == "") {
        document.getElementById("hidMsg").innerHTML = "hid number should not be empty!";
        hidvalid = false;
    }
    if (hid.length != 10) {
        document.getElementById("hidMsg").innerHTML = "hid number is correct !!";
        hidvalid = false;
    } else {
        hidvalid = true;
    }
}


function validhid() {
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



function pRemover() {
    document.getElementById("passMsg").innerHTML = "";
}




function validation() {
    if (fnamevalid == true && contactvalid == true && idvalid == true && hnamevalid == true && hidvalid == true &&  emailvalid == true && passwordvalid == true  &&  gendervalid == true && addvalid == true ) {
        return true;
    } else {
        return false;
    }
}


