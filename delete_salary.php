<?php
include('config/config.php');
?>

<?php
$con=open_connection();
echo $salid= $_GET['did'];
$sql1="delete from tbl_salary where tbl_salary.id=$salid";
$result=mysqli_query($con,$sql1);
header("location:view_salary.php");
?>