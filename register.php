<?php

// LOGIN VERIFICATION 

$host = "tund.cefns.nau.edu";
$local = 'localhost';
$database = "tcs259";
$user = "tcs259";
$password = "rascal42";

// Connect to DB server

$cxn = mysql_connect ($host,$user,$password) or die ("No connection possible");

$dbr = mysql_select_db ($database,$cxn) or die (mysql_error());

if ($dbr == FALSE) echo "<h6>DB Error: ".mysql_error($cxn)."</h6>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $myfirstname = $_POST['fname'];
    $mylastname = $_POST['lname'];
    $myusername = $_POST['username'];
    $myemail = $_POST['email'];
    $mypassword = $_POST['password'];
    $mypassword2 = $_POST['password2'];
    $valid = true;
        
    if ($myfirstname == "" or $mylastname == "" or $myusername == "" or $myemail == "" or $mypassword == "" or $mypassword2 == "" or $mypassword != $mypassword2)
    {
        $valid = false;
        header ("location: registration.html");
    }
    
    else
    {
        $sql = "INSERT INTO Users (ID, FName, LName, Email, Password) VALUES ('$myusername', '$myfirstname', '$mylastname', '$myemail', '$mypassword')";
        $result = mysql_query ($sql, $cxn);
        header ("location: login2.html");
    }
}

?>