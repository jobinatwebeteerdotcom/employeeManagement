<?php
include('config/config.php');
?>

<?php
$con=open_connection();
echo $sid=@$_POST['id'];
echo $empid=@$_POST['empid'];
echo $bs=@$_POST['bs'];
echo $ta=@$_POST['ta'];
echo $pf=@$_POST['pf'];
echo $tsal=@$_POST['tsal'];
echo $datef=@$_POST['datef'];
$sql1="UPDATE tbl_salary SET employee_id='$empid',bs='$bs',ta='$ta',pf='$pf',total_salary='$tsal',date_from='datef' WHERE id='$sid'";
$result=mysqli_query($con,$sql1);
header('location:view_salary.php');

?>
