<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	require('magic.php');
	$username=test_input($_POST['username']);
	$password=test_input($_POST['password']);
	$email=test_input($_POST['email']);
	$address=test_input($_POST['address']);
	$user_contact=test_input($_POST['user_contact']);
	mysqli_query($con,"INSERT INTO user_reg(username,password,email,address,user_contact) VALUES('$username','$password','$email','$address','$user_contact')");
	echo "<script>alert('Thanks for registration.Enjoy food with Foodcubo');window.location.href='login.php';</script>";
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