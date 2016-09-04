<?php
include('config/config.php');
?>

<?php
$con=open_connection();
echo $lid= $_GET['did'];
$sql1="delete from tbl_leaves where tbl_leaves.id=$lid";
$result=mysqli_query($con,$sql1);
header("location:view_leaves.php");
?>