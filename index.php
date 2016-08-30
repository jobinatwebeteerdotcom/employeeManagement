<?php
include('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" />
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('header.php');
?>
<div class="container-fluid sec2">
<div class="col-md-2">
<?php
include('sidebar.php');
?>
</div>
<div class="col-md-10">
<?php
$con=open_connection();
$sql="SELECT tbl_employees.id, tbl_employees.name, tbl_employees.email, tbl_employees.phone, tbl_employees.address, tbl_employees.qualification, tbl_departments.department, tbl_employees.password, tbl_employees.status
FROM tbl_employees
INNER JOIN tbl_departments ON tbl_employees.department_id = tbl_departments.id  order by tbl_employees.id";
$result=mysqli_query($con,$sql);
?>
<h1>EMPLOYEES</h1>
<div class="add1" >
<a  href="add_employees.php"> add employees</a>
</div>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>phone</th>
<th>address</th>
<th>qualification</th>
<th>department_id</th>
<th>password</th>
<th>status</th>
<th>edit</th>
<th>delete</th>
</tr>

<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['qualification'];?></td>
<td><?php echo $row['department'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['status'];?></td>
<td><a href="#">edit</a></td>
<td><a href="delete_employee.php?eid=<?php echo $row['id'];?> ">delete</a></td>
</tr>
<?php }?>
</table>
</div>
</div>

<!--end section2-->





</body>
</html>