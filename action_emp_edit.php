<?php
include('config/config.php');
?>

<?php
$con=open_connection();

echo $eid=@$_POST['id'];
echo $name=@$_POST['name'];
echo $email=@$_POST['email'];

echo $phone=@$_POST['phone'];
echo $address=@$_POST['address'];
echo $qualification=@$_POST['qualification'];
echo $department=@$_POST['department'];
echo $password=@$_POST['password'];
echo $status=@$_POST['status'];
echo $sql1="update tbl_employees set name='$name',email='$email',phone='$phone',address='$address',qualification='$qualification',department_id='$department',password='$password',status='$status' where id='$eid'";
$result=mysqli_query($con,$sql1);
header('location:index.php');

?>
