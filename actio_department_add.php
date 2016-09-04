<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $did=@$_POST['id'];
echo $department=@$_POST['department'];
$sql1="insert into tbl_departments values('$did','$department')";
$result=mysqli_query($con,$sql1);
header('location:view_department.php');

?>