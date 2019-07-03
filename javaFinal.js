var name_check = false;
var number_check = false;
var subject_check = false;
var comment_check = false;

function checkName(name)
{
    if (!name_check)
    {
        var nameAlert = document.getElementById(name);
        if (!nameAlert.value)
        {
            window.alert("Must enter a name");
            nameAlert = document.getElementById(name);
        }
    }
    else 
    {
        return true;
    }
};

function checkNumber(number)
{
    if (!number_check)
    {
        var numberAlert = document.getElementById(number);
        if (!numberAlert.value)
        {
            window.alert("Must enter a telephone number");
            numberAlert = document.getElementById(number);
        }
    }
    else {}
};

function checkSubject(subject)
{           
    if (!subject_check)
    {
        var subjectAlert = document.getElementById(subject);
        if (!subjectAlert.value)
        {
            window.alert("Must enter a subject");
            subjectAlert = document.getElementById(subject);
        }
    }
    else {}
};
    
function checkComment(comment)
{           
    if (!comment_check)
    {
        var commentAlert = document.getElementById(comment);
        if (!commentAlert.value)
        {
            window.alert("Must enter a comment");
            commentAlert = document.getElementById(comment);
        }
    }
    else {}
};

function confirmation ()
{
    window.alert("Your message was sent.");
    return true;
}
    
function verifyAll()
{
    checkName
    checkNumber()
    checkSubject()
    checkComment()
    checkSubject()
};          