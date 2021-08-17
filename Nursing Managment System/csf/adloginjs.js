
function validateForm()
{
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;

    if(email=="" || email.length<3)
    {
        document.getElementById("errorname").innerHTML="please fill up usernmae it";
        return false;
    }

    if(password=="" )
    {
        document.getElementById("errorroll").innerHTML="please give the password";
        return false;
    }
}

function va()
{
    var email=document.getElementById("email").value;

    if(email="" || email.length<3)
    {
        document.getElementById("errorname").innerHTML="please compleate your username";
    }
    else
    {
        document.getElementById("errorname").innerHTML="your username is valid";
    }
    
}

function val()
{
    var password=document.getElementById("password").value;

    if(password="" || password.length<3)
    {
        document.getElementById("errorroll").innerHTML="please compleate your password";
    }
    else
    {
        document.getElementById("errorroll").innerHTML="your password is valid";
    }
    
}