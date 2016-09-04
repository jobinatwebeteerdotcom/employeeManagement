<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $sid=$_POST['id'];
echo $eid=$_POST['eid'];
echo $bs=$_POST['bs'];
echo $ta=$_POST['ta'];
echo $pf=$_POST['pf'];
echo $tsal=$_POST['tsal'];
echo $date=$_POST['datef'];
$sql1="insert into tbl_salary values('$sid','$eid','$bs','$ta','$pf','$tsal','$date')";
echo $result=mysqli_query($con,$sql1);
header('location:view_salary.php');

?>