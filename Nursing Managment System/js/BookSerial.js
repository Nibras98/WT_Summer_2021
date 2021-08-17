var namevalid = false;
var contactvalid = false;
var paymentvalid = false;
var problemvalid = false;



var SerialBooking;

//name validation
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
    } else if (!isNaN(name)) {
        document.getElementById("nameMsg").innerHTML = "*Only Characters are allowed!";
        namevalid = false;
    } else if (name.match(correct_way)) {
        document.getElementById("nameMsg").innerHTML = "*Name format is  valid!";
        namevalid = true;
    } else {
        namevalid = false;
    }


}


function nameRemover() {
    document.getElementById('nameMsg').innerHTML = "";

}
//Contact number validation

function contactEmpty() {
    var contact = document.getElementById("contact").value;
    if (contact == "") {
        document.getElementById("contactMsg").innerHTML = "contact number should not be empty!";
        contactvalid = false;
    }
    if (contact_number.length != 11) {
        document.getElementById("contactMsg").innerHTML = "contact number should be 11 digit!";
        contactvalid = false;
    } else {
        contactvalid = true;
    }
}


function contactRemover() {
    document.getElementById('contactMsg').innerHTML = "";

}




//Problem validation
function problemEmpty() {
    var problem = document.getElementById("problem").value;
    
    if (problem == "") {
        document.getElementById("problemMsg").innerHTML = "  *field can't be empty!";

        problemvalid = false;
    } else {
        problemvalid = true;
    }

}

function problemRemover() {
    document.getElementById("problemMsg").innerHTML = "";

}



function validation() {
    if (namevalid == true  && contactvalid == true && paymentvalid == true && problemvalid) {
        return true;
    } else {
        return false;
    }
}