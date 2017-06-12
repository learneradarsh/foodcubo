
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{	require('magic.php');
	$name=test_input($_POST['name']);
	$booktpe=test_input($_POST['booktpe']);
	$budget=test_input($_POST['budget']);
	$contact=test_input($_POST['contact']);
	mysqli_query($con,"INSERT INTO bookus(name,booktpe,budget,contact) VALUES('$name','$booktpe','$budget','$contact')") or die('can not insert data');
echo "<script>
alert('Thanks for booking us.Our consultant will call you for confirmation of your booking.');
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