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
$sql1="insert into tbl_employees values('$eid','$name','$email','$phone','$address','$qualification','$department','$password','$status')";
$result=mysqli_query($con,$sql1);
header('location:index.php');

?>