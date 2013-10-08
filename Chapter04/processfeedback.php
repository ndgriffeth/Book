<?php

//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$feedback=$_POST['feedback'];

print("<p>Customer feedback before addslashes</p>");
echo "<p>";
print($feedback);
echo "</p>";

print("<p>Customer feedback after addslashes</p>");
$feedback=addslashes(trim($_POST['feedback']));
echo "<p>";
print($feedback);
echo "</p>";

print("<p>Customer feedback after stripslashes</p>");
$feedback=stripslashes($feedback);
echo "<p>";
print($feedback);
echo "</p>";



print($feedback);

//set up some static information
$toaddress = "nancy@griffeth.name";

$subject = "Feedback from web site";

$mailcontent = "Customer name: ".$name."\n".
			   "Customer email: ".$email."\n".
               "Customer comments:\n".$feedback."\n";

$fromaddress = "From: webserver@example.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<html>
<head>
<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback has been sent.</p>
</body>
</html>
