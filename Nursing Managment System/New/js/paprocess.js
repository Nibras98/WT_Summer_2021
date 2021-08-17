function validateForm() {
    var username = document.getElementById("username").value;
    var contact = document.getElementById("contact").value;
    var serial = document.getElementById("serial").value;
    var payment = document.getElementById("payment").value;
    var problem = document.getElementById("problem").value;
    
    if (username == "" || username.length<3) {
     document.getElementById("err-username").innerHTML="Please fill your UserName";
      return false;
    }
   
       if (contact == "") {
        document.getElementById("err-contact").innerHTML="Please fill out your contact";
         return false;
       }else if(contact.length < 11){
           document.getElementById("err-contact").innerHTML="Contact number have to 11 character long";
       }
      
    if(serial == ""){
        document.getElementById("err-serial").innerHTML="Please provide your serial";
        return false;
    }
    if (payment == "") {
        document.getElementById("err-payment").innerHTML="Please provide your payment";
         return false;
       }
    if (problem == "" ) {
        document.getElementById("err-problem").innerHTML="Write something here";
        return false;
    }
   
}
function validusername()
{
    var username=document.getElementById("username").value;

    if(username="" || username.length<3)
    {
        document.getElementById("err-username").innerHTML="please do it";
    }
    else
    {
        document.getElementById("err-username").innerHTML="your name is valid";
    }
}
function validserial()
{
    var serial=document.getElementById("serial").value;

    if(serial="" || lname.length>0)
    {
        document.getElementById("err-serial").innerHTML="please do it";
    }
    else
    {
        document.getElementById("err-serial").innerHTML="serial is valid";
    }
    
}
