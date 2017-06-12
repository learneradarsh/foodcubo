<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	require('magic.php');
	$name=test_input($_POST['name']);
	$email=test_input($_POST['email']);
	$subject=test_input($_POST['subject']);
	$message=test_input($_POST['message']);
	mysqli_query($con,"INSERT INTO contact_us(name,email,subject,message) VALUES('$name','$email','$subject','$message')");
	echo "<script>alert('We will contact you ASAP.');window.location.href='index.php';</script>";
	mysqli_close($con);
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>