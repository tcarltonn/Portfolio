<?php

session_start();

if ($_SESSION['login_user'] == null)
{
    header ("location: login2.html");
}

?>

<http>

<head>
<title>About Me</title>
<link href="mainstyles.css" type="text/css" rel="stylesheet"/>
</head>

<style>

body {background-color:#FFCCE6;}

p {background-color:#FFFFFF; font-family:"Comic Sans MS", cursive, sans-serif;}

a:link {color:blue}

footer {padding: 1em; color: black; background-color: #33ccff; clear: left; text-align: center;}

</style>


<body>

<h1>Information Etcetera</h1>

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

  <p>If you are only here to read my amateur poems, just click the link below:</p>

  <a href="#poetry">Click here.</a>

  <p> My name is Tyler Carlton Hy Smith. I am from Valencia, California. I am a 22 year old that loves to play piano and guitar, write and film short films and videos, and is in love with the beach.</p>

  <p> I am majoring in Computer Science and am a junior at Northern Arizona University. I am in the fraternity, Tau Kappa Epsilon, and love being apart of Greek life.</p>

  <p> My main hobbies are:</p>

  <ul>
  <li>Piano</li>
  <li>Guitar</li>
  <li>Photography</li>
  <li>Film</li>
  <li>Reading</li>
  <li>Hockey: LA Kings</li>
  <li>Football: Seattle Seahawks</li>
  <li>Basketball: LA Lakers</li>
  </ul>

  <p> Here is a link to a picture I took of my favorite view in Malibu, California:</p>

  <a href="IMG_1431.JPG">A Beautiful Picture</a>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<h3><a id="poetry"><p>MY AMATEUR POEMS:</p></a></h3>

<p>
Be<br>
Be free<br>
As a bird<br>
In the open sky<br>
Be<br>
Be free<br>
Spread your wings<br>
And fly
</p>


<p>
Some things you can let it go,<br>
Some things not.<br>
But there are so many more things in life,<br>
Than taking it away with one shot.<br>
Some things cannot be unseen,<br>
But some things cannot be seen.<br>
And when it comes down to it.<br>
It is you who decides what sides of you, others see.<br>


<footer> Contact Info:<br> Tyler Carlton Smith<br> Phone: 661-400-3618<br> Email: tcs259@nau.edu
</footer>

</body>

</http> 