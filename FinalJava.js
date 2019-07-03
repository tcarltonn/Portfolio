"use strict";

var nameEmpty = document.forms["contactform"]["name"].value;
var emailEmpty = document.forms["contactform"]["email"].value;
var emailFormat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var email = getElementById("email");
var emailValue = email.value;
var emailTest = emailFormat.test(emailValue);
var subjectEmpty = document.forms["contactform"]["subject"].value;
var commentEmpty = document.forms["contactform"]["comment"].value;

function validateEmail()
{
    if (emailEmpty == "")
    {
        window.alert("Must enter an email");
        return false;
    }
    
    else if (!emailEmpty.value.match(emailFormat))
    {
        window.alert("Must enter valid email.");
        return false;
    }
    
    else
    {
        return true;
    }
};

function validateEmptyForm()
{

    if (nameEmpty == "")
    {
        window.alert("Must enter a name");
        return false;
    }

    else if (subjectEmpty == "")
    {
        window.alert("Must enter a subject");
        return false;
    }

    else if (commentEmpty == "")
    {
        window.alert("Must enter a comment");
        return false;
    }
    
    else 
    {
        return true;
    }

};

function verifyAll()
{
    if (validateEmail() & validateEmptyForm())
    {
        return true;
    }
    else
    {
        return false;
    }
}