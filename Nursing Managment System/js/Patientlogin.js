window.uvalid = false;
window.pvalid = false;

function emailEmpty() {
    var email = document.getElementById("email").value;
    if (email== "") {
        document.getElementById("emailMsg").innerHTML = "  *field can't be empty!";

        window.uvalid = false;
    } else {
        window.uvalid = true;
    }



}

function emailRemover() {
    document.getElementById('userMsg').innerHTML = "";

}


function passwordEmpty() {
    var password = document.getElementById("password").value;
    if (password == "") {
        document.getElementById("passMsg").innerHTML = "*password field can't be empty!";
        window.pvalid = false;

    } else {
        window.pvalid = true;

    }
}

function pRemover() {
    document.getElementById("passMsg").innerHTML = "";
}