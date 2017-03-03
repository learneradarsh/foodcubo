<?php
include_once dirname(__FILE__) . '\db_connection.php';
if(isset($_POST['res_name']) && isset($_POST['res_loc']) && isset($_POST['res_type']))
{
$res_name=$_POST['res_name'];
$res_name=mysqli_real_escape_string($mysqli,$res_name);
$res_loc=$_POST['res_loc'];
$res_loc=mysqli_real_escape_string($mysqli,$res_loc);
$res_type=$_POST['res_type'];
$res_type=mysqli_real_escape_string($mysqli,$res_type);
$res_email=$_POST['res_email'];
$res_email=mysqli_real_escape_string($mysqli,$res_email);
$res_contact=$_POST['res_contact'];
$res_contact=mysqli_real_escape_string($mysqli,$res_contact);
$res=mysqli_query($mysqli,"INSERT INTO register (res_name,res_location,email,contact) VALUES ('$res_name','$res_loc','$res_type','$res_email')") or die("Error in Insertion");
header("Location: ../index.php?q=registered");
mysqli_close($mysqli);
}
?>