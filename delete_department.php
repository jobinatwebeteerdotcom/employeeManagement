<?php
include('config/config.php');
?>

<?php
$con=open_connection();
$dep_id= $_GET['did'];
$sql1="delete from tbl_departments where id=$dep_id";
$result=mysqli_query($con,$sql1);
header("location:view_department.php");
?>