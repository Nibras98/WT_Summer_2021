var namevalid = false;
var contactvalid = false;
var idvalid = false;
var setschedulevalid = false;
var serialvalid = false;



var SetSchedule;

//name validation
function nameEmpty() {
    var name = document.getElementById("name").value;
    var lent = name.length;
    var correct_way = /^[A-Za-z]+$/;

    if (name == "") {
        document.getElementById("nameisCorrect").innerHTML = "*field can't be empty!";

        namevalid = false;
    }
    if (name.length <= 3) {
        document.getElementById("nameisCorrect").innerHTML = "*Name should be greater than 3 character!";

        namevalid = false;
    } else if (!isNaN(name)) {
        document.getElementById("nameisCorrect").innerHTML = "*Only Characters are allowed!";
        namevalid = false;
    } else if (name.match(correct_way)) {
        document.getElementById("nameisCorrect").innerHTML = "*Name format is  valid!";
        namevalid = true;
    } else {
        namevalid = false;
    }


}


function nameRemover() {
    document.getElementById('nameisCorrect').innerHTML = "";

}
//Contact number validation

function contactEmpty() {
    var contact = document.getElementById("contact").value;
    if (contact == "") {
        document.getElementById("contactisCorrect").innerHTML = "contact number should not be empty!";
        contactvalid = false;
    }
    if (contact_number.length != 11) {
        document.getElementById("contactisCorrect").innerHTML = "contact number should be 11 digit!";
        contactvalid = false;
    } else {
        contactvalid = true;
    }
}


function contactRemover() {
    document.getElementById('contactisCorrect').innerHTML = "";

}




//serial validation
function serialEmpty() {
    var serial = document.getElementById("serial").value;
    
    if (serial == "") {
        document.getElementById("serialisInput").innerHTML = "  *field can't be empty!";

        serialvalid = false;
    } else {
        serialvalid = true;
    }

}

function serialRemover() {
    document.getElementById("serialisInput").innerHTML = "";

}



function validation() {
    if (namevalid == true  && contactvalid == true &&  idvalid == true  && setschedule == true &&  serialvalid == true && serialvalid) {
        return true;
    } else {
        return false;
    }
}