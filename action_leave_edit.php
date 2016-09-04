<?php
include('config/config.php');
?>

<?php
$con=open_connection();



echo $lid=@$_POST['id'];
 echo $eid=@$_POST['empid'];
echo $ldate=@$_POST['ldate'];
echo $reson=@$_POST['reson'];
echo $status=@$_POST['status'];

$sql1="UPDATE tbl_leaves SET employee_id='$eid',leave_date='$ldate',reson='$reson',`status`='status' WHERE id='$lid'";
$result=mysqli_query($con,$sql1);
header('location:view_leaves.php');

?>