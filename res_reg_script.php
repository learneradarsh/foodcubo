<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	require ('magic.php');
$res_name=test_input($_POST['res_name']);
$res_loc=test_input($_POST['res_loc']);
$res_type=test_input($_POST['res_type']);
$res_email=test_input($_POST['res_email']);
$res_contact=test_input($_POST['res_contact']);
mysqli_query($con,"INSERT INTO res_reg(res_name,res_loc,res_type) VALUES('$res_name','$res_loc','$res_type')") or die('can not insert data');
mysqli_query($con,"INSERT INTO res_contact(res_email,res_contact) VALUES('$res_email','$res_contact')") or die('can not insert data');
echo "<script>
alert('Thanks for registration.We will contact you ASAP');
window.location.href='index.php';
</script>";
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