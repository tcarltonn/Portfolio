<?php

session_start();

if ($_SESSION['login_user'] == null)
{
    header ("location: login2.html");
}

?>

<http>

<head>
<title>Confirmation Page</title>
<link href="mainstyles.css" type="text/css" rel="stylesheet"/>
</head>

<style>
body {background-color:#FFCCE6;}

p {background-color:#FFFFFF; font-family:"Comic Sans MS", cursive, sans-serif;}

a:link {color:yellow}

form {background-color:#FFFFFF; font-family:"Comic Sans MS", cursive, sans-serif;}

footer {padding: 1em; color: black; background-color: #33ccff; clear: left; text-align: center;}

</style>

<body>

<h1>Confirmation Page</h1>

<div class="scrollmenu">
  <a href="index.php">Home</a>
  <a href="second.php">Info Ect.</a>
  <a href="thoughts.php">Thoughts</a>
  <a href="form2.php">Contact Form</a>
  <a href="resume.php" target=“_blank”>Resume</a>
  <a href="https://www.youtube.com/watch?v=eo7M8AI0dlo&app=desktop" target=“_blank”>Star Wars Parody Video</a>
  <a href="https://www.facebook.com/tyler.c.smith.923" target=“_blank”>Facebook</a>
  <a href="logout.php">Log Out</a>
</div>

<p>Your email was sent.</p>

<p>Thank you for getting in contact with me. I will respond as soon as I can.</p>

<p>Have a great day.</p>

</body>

</http> 