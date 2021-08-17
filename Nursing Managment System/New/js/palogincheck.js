
function validateForm()
{
    var fname=document.getElementById("email").value;
    var roll=document.getElementById("password").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

    if(email == ""){
        document.getElementById("err-email").innerHTML="Please provide a valid email";
        return false;
    }else if(!res){
  
      document.getElementById("err-email").innerHTML="Email format is not correct";
      return false; 
    }
    if (pass == "") {
     document.getElementById("err-password").innerHTML="Please fill out password";
      return false;
    }else if(pass.length < 4){
        document.getElementById("err-password").innerHTML="Password have to 4 character long";
    }
}

