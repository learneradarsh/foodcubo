<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	require('../magic.php');
$name=test_input($_POST['name']);
$contact=test_input($_POST['contact']);
$address=test_input($_POST['address']);
$tefquan=test_input($_POST['tefquan']);
mysqli_query($con,"INSERT INTO tef_reg(name,contact,address,tefquan) VALUES('$name','$contact','$address','$tefquan')") or die('can not insert data');
echo "<script>
alert('Thanks for registration.We will contact you ASAP');
window.location.href='../index.php';
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