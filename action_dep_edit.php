<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $did=@$_POST['id'];
echo $qualification=@$_POST['qualification'];
echo $department=@$_POST['department'];
echo $sql1="update tbl_departments set department='$department' where id='$did'";
$result=mysqli_query($con,$sql1);
header('location:view_department.php');

?>
