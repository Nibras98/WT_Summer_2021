var namevalid = false;
var contactvalid = false;
var idvalid = false;
var setschedulevalid = false;
var serialvalid = false;

var Set_Schedule;





//User name validation

function usernameEmpty() {
    var username = document.getElementById("username").value;
    var lent = username.length;
    var correct_way = /^[A-Za-z]+$/;

    if (username == "") {
        document.getElementById("usernameMsg").innerHTML = "*field can't be empty!";

        usernamevalid = false;
    }
    if (username.length <= 3) {
        document.getElementById("usernameMsg").innerHTML = "*Name should be greater than 3 character!";

        usernamevalid = false;
    } else if (!isNaN(username)) {
        document.getElementById("usernameMsg").innerHTML = "*Only Characters are allowed!";
        usernamevalid = false;
    } else if (username.match(correct_way)) {
        document.getElementById("usernameMsg").innerHTML = "*Name format is  valid!";
        usernamevalid = true;
    } else {
        usernamevalid = false;
    }


}


function validusername() {
    document.getElementById('usernameMsg').innerHTML = "";

}
//Contact number validation

function contactEmpty() {
    var contact_number = document.getElementById("contact_number").value;
    if (contact_number == "") {
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


function validcontact() {
    document.getElementById('contactMsg').innerHTML = "";

}


function validation() {
    if (serialvalid== true && usernamevalid== true && contactvalid == true && paymentvalid == true && problemvalid == true  ) {
        return true;
    } else {
        return false;
    }
}