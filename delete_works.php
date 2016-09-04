<?php
include('config/config.php');
?>

<?php
$con=open_connection();
echo $workid= $_GET['did'];
$sql1="delete from tbl_works where tbl_works.id=$workid";
$result=mysqli_query($con,$sql1);
header("location:view_works.php");
?>