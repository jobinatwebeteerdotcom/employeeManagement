<?php
include('config/config.php');
?>

<?php
$con=open_connection();
$emp_id= $_GET['eid'];
$sql1="delete from tbl_employees where id=$emp_id";
$result=mysqli_query($con,$sql1);
header("location:index.php");
?>