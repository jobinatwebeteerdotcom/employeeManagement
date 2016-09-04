<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $id=@$_POST['id'];
echo $eid=@$_POST['eid'];
echo $ldate=@$_POST['ldate'];
echo $reson=@$_POST['reson'];
echo $status=@$_POST['status'];
$sql1="INSERT INTO tbl_leaves VALUES ('$id','$eid','$ldate','$reson','$status')";
$result=mysqli_query($con,$sql1);
header('location:view_leaves.php');

?>