<?php
include('config/config.php');
?>

<?php
$con=open_connection();

 $wid=@$_POST['id'];
$aby=@$_POST['aby'];
$ato=@$_POST['ato'];
$pid=@$_POST['pid'];
$description=@$_POST['description'];
 $add=@$_POST['add'];
 $deadline=@$_POST['deadline'];
 $status=@$_POST['status'];
 $remarks=@$_POST['remark'];
$sql1="INSERT INTO tbl_works VALUES ('$wid','$aby','$ato','$pid','$description','$add','$deadline','$status','$remarks')";
$result=mysqli_query($con,$sql1);
header('location:view_works.php');

?>