<?php

session_start();

if ($_SESSION['login_user'] == null)
{
    header ("location: login2.html");
}

?>

<!DOCTYPE html>

<html>
<head>
<title>Contact Form</title>
<link href="mainstyles.css" type="text/css" rel="stylesheet"/>
</head>

<style>
body {background-color:#FFCCE6;}

p {background-color:#FFFFFF; font-family:"Comic Sans MS", cursive, sans-serif;}

a:link {color:yellow}

form {background-color:#FFFFFF; font-family:"Comic Sans MS", cursive, sans-serif;}

footer {padding: 1em; color: black; background-color: #33ccff; clear: left; text-align: center;}

.error {color: #FF0000;}

</style>

<body>

<h1>Contact Form</h1>

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

<p> Please fill out the form below to get in contact with me.</p>

<?php

$labels = array("name" => "Name: ",
                "email" => "E-mail: ",
		"subject" => "Subject: ",
		"reason"=> array("none" => "",
				"complaint" => "Complaint",
				"question" => "Question",
				"suggestion" => "Suggestion",
				"other" => "Other"),
		"comment" => "Comment: ");
?>

<form action="form3.php" method="POST">  
 
  <?php
	foreach ($labels as $field => $label)
        {
	  
	  /* if ($field == "reason")
	  {
	    echo "<label for = '$field'> Reason: </label>\n";
	  }

	  else
	  {
	    echo "<label for = '$field'> $label </label>\n";
	  } */

	  if ($field === "name" or $field === "email" or $field === "subject")
	  {
	    echo "<label for = '$field'> $label </label>\n";
	    echo "<input type  = 'text' name = '$field' id = '$field'
			size = '65' maxlength = '65' /><br><br>\n";
	  }

	  if ($field === "reason")
	  {
	    echo "<label for = '$field'> Reason: </label>\n";
	    echo "<select name  = '$field' id = '$field'>\n";
	    foreach ($label as $select => $value)
	    {
	      echo "<option value = '$select' ";
		if ($select === "none")
		{
		  echo "selected";
		}
	     echo "> ".$value." </option>";
	    }
	    echo "</select> <br> <br>";
	  }

	  if ($field === "comment")
	  {
	    echo "<label for = '$field'> Comments: </label><br>\n";
	    echo "<textarea name = '$field' id = '$field' cols = '65' rows = '10'>Enter comment here.</textarea> <br> <br>\n";
	  }

        }

	echo "<input type = 'submit' value = 'Send'> <br> <br>\n";

  ?>


</form>

<footer> Contact Info:<br> Tyler Carlton Smith<br> Phone: 661-400-3618<br> Email: tcs259@nau.edu
</footer>

</body>

</html> 