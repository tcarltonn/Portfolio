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
    $myusername = $_POST['username'];
    $mypassword = $_POST['password']; 
        
    $sql = "SELECT * FROM Users WHERE ID = '$myusername' AND password = '$mypassword'";
    $result = mysql_query ($sql, $cxn);
    if (mysql_num_rows ($result) == 1)
    {
        $row = mysql_fetch_array ($result, MYSQLI_ASSOC);
        session_start();
        $_SESSION['login_user'] = $myusername;
        header("location: index.php");
    }
    else
    {
        $error = "Your Login Name or Password is invalid";
        header ("location: login2.html");
    }
}

?>