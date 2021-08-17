
function regvalid()
{
    var fname=document.getElementById("fname").value;
    var lname=document.getElementById("lname").value;
    var aname=document.getElementById("aname").value;
    var nid=document.getElementById("nid").value;
    var contact=document.getElementById("contact").value;
    var mail=document.getElementById("mail").value;
    var password=document.getElementById("password").value;
    var adate=document.getElementById("adate").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(mail);

    if(fname=="" || fname.length<3)
    {
        document.getElementById("errorname").innerHTML="please fill up usernmae it";
        return false;
    }

    if(lname=="" || lname.length<3 )
    {
        document.getElementById("errorroll").innerHTML="please give the last name";
        return false;
    }

    if(aname=="" || aname.length<4 )
    {
        document.getElementById("erroraname").innerHTML="please give the company name";
        return false;
    }
    if(nid=="" || nid.length<10)
    {
        document.getElementById("errornid").innerHTML="please give the nid";
        return false;
    }
    if(contact=="" || nid.length<11)
    {
        document.getElementById("errorcontact").innerHTML="please fill up contact name ";
        return false;
    }
    if(mail=="" )
    {
        document.getElementById("errormail").innerHTML="please fill up the email address it";
        return false;
    }
    
    if(password=="" || password.length<3)
    {
        document.getElementById("errorpassword").innerHTML="please fill up password";
        return false;
    }
    if(adate=="" )
    {
        document.getElementById("erroradate").innerHTML="please fill up the date";
        return false;
    }
}

function a()
{
var fname=document.getElementById("fname").value;

    if(fname="" || fname.length<3)
    {
        document.getElementById("errorname").innerHTML="please compleate your firstname";
    }
    else
    {
        document.getElementById("errorname").innerHTML="your firstname is valid";
    }
    
}

function b()
{
    var lname=document.getElementById("lname").value;

    if(lname="" || lname.length<3)
    {
        document.getElementById("errorroll").innerHTML="please compleate your lastname";
    }
    else
    {
        document.getElementById("errorroll").innerHTML="your lastname  is valid";
    }
    
}


function c()
{
    var aname=document.getElementById("aname").value;

    if(aname="" || aname.length<3)
    {
        document.getElementById("erroraname").innerHTML="please compleate your company name";
    }
    else
    {
        document.getElementById("erroraname").innerHTML="your company name  is valid";
    }
    
}

function d()
{
    var nid=document.getElementById("nid").value;

    if(nid="" || nid.length<10)
    {
        document.getElementById("errornid").innerHTML="please compleate your nid number";
    }
    else
    {
        document.getElementById("errornid").innerHTML="your nid number  is valid";
    }
    
}


function e()
{
    var contact=document.getElementById("contact").value;

    if(contact="" || contact.length<11)
    {
        document.getElementById("errorcontact").innerHTML="please compleate your connect number";
    }
    else
    {
        document.getElementById("errorcontact").innerHTML="your connect number  is valid";
    }
    
}

function f()
{
    var mail=document.getElementById("mail").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(mail);


    if(!res)
    {
        document.getElementById("errormail").innerHTML="your email is invalid";
    }
    else
    {
        document.getElementById("errormail").innerHTML="your lastname  is valid";
    }
    
}

function g()
{
    var password=document.getElementById("password").value;

    if(password="" || password.length<3)
    {
        document.getElementById("errorpassword").innerHTML="please compleate your password";
    }
    else
    {
        document.getElementById("errorpassword").innerHTML="your password is valid";
    }
    
}

function h()
{
    var adate=document.getElementById("adate").value;

    if(adate="" )
    {
        document.getElementById("erroradate").innerHTML="please compleate your password";
    }
    else
    {
        document.getElementById("erroradate").innerHTML="your password is valid";
    }
    
}