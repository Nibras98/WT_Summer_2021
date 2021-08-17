function validateForm() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var contact = document.getElementById("contact").value;
    var nid = document.getElementById("nid").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("pass").value;
    var add = document.getElementById("add").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");

    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    if (fname == "" || fname.length<3) {
     document.getElementById("err-fname").innerHTML="Please fill your first name";
      return false;
    }
    if (lname == "") {
        document.getElementById("err-lname").innerHTML="Please fill out name";
         return false;
       }
       if (contact == "") {
        document.getElementById("err-contact").innerHTML="Please fill out your contact";
         return false;
       }else if(contact.length < 11){
           document.getElementById("err-contact").innerHTML="Contact number have to 11 character long";
       }
       if (nid == "") {
        document.getElementById("err-nid").innerHTML="Please fill out nid number";
         return false;
       }else if(nid.length < 17){
           document.getElementById("err-nid").innerHTML="Nid number have to 17 character long";
       }
    if(email == ""){
        document.getElementById("err-email").innerHTML="Please provide a valid email";
        return false;
    }else if(!res){
  
      document.getElementById("err-email").innerHTML="Email format is not correct";
      return false; 
    }
    if (pass == "") {
     document.getElementById("err-pass").innerHTML="Please fill out password";
      return false;
    }else if(pass.length < 4){
        document.getElementById("err-pass").innerHTML="Password have to 4 character long";
    }
    
    if (add == "" || add.length < 5 ) {
        document.getElementById("err-add").innerHTML="Write something here";
        return false;
    }
    if (!male.checked && !female.checked && !other.checked) {
        document.getElementById("err-gender").innerHTML="---Choose your gender";
        return false;
    }
}
function validfname()
{
    var fname=document.getElementById("fname").value;

    if(fnmae="" || fname.length<3)
    {
        document.getElementById("err-fname").innerHTML="please do it";
    }
    else
    {
        document.getElementById("err-fname").innerHTML="your name is valid";
    }
}
function validlname()
{
    var lname=document.getElementById("lname").value;

    if(lnmae="" || lname.length<3)
    {
        document.getElementById("err-lname").innerHTML="please do it";
    }
    else
    {
        document.getElementById("err-lname").innerHTML="your name is valid";
    }
    
}
