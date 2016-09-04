<?php
include('config/config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" />
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- start section1-->
<?php
include('header.php');
?>
<!-- end section1-->

<!-- start section2 -->
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
<td><a href="edit_employee.php?id=<?php echo $row['id'];?>">edit</a></td>
<td><a href="delete_employee.php?eid=<?php echo $row['id'];?> ">delete</a></td>
</tr>
<?php }?>
</table>
</div>
</div>
<!--end section2-->





</body>
</html>