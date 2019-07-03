<?php

$host = "tund.cefns.nau.edu";
$local = 'localhost';
$database = "tcs259";
$user = "tcs259";
$password = "rascal42";

// Connect to DB server

$cxn = mysql_connect ($host,$user,$password) or die ("No connection possible");

$dbr = mysql_select_db ($database,$cxn) or die (mysql_error());

// LOGOUT CODE

session_start();
$sql = "UPDATE Activity SET SignOut = SYSDATE() WHERE Username = '".$_SESSION['login_user']."'";
unset ($_SESSION);
session_destroy ();
$result = mysql_query ($sql, $cxn);
header ("location: login2.html");

?>