<?php

session_start();
if ($_SESSION['login_user'] == null)
{
    header ("location: login2.html");
}

?>



<http>

<head>
<title>Homepage: Tyler Carlton Smith</title>
<link href="mainstyles.css" type="text/css" rel="stylesheet"/>
</head>

<style>
body{background-color:#FFCCE6; background-image: url('IMG_0385.JPG');background-repeat: no-repeat; background-attachment: fixed; background-position: center; background-size: 900px 600px}

p{background-color:#FFFFFF;}

a:link{color:yellow}

</style>

<body>

<h1>The Homepage of Tyler Carlton Smith</h1>

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

</body>

</http> 