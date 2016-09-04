<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $wid=@$_POST['id'];
echo $assigned_by=@$_POST['assigned_by'];
echo $assigned_to=@$_POST['assigned_to'];

echo $project_id=@$_POST['project_id'];
echo $description=@$_POST['description'];
echo $add_on=@$_POST['add_on'];
echo $deadline=@$_POST['deadline'];
echo $status=@$_POST['status'];
echo $remarks=@$_POST['remarks'];
$sql1="UPDATE tbl_works SET assigned_by='$assigned_by',assigned_to='$assigned_to',project_id='$project_id',description='$description',add_on='$add_on',deadline='$deadline',status='$status',remarks='$remarks' WHERE id='$wid'";
$result=mysqli_query($con,$sql1);
header('location:view_works.php');

?>
