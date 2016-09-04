<?php
include('config/config.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css" />
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
$sql="select * from tbl_departments order by tbl_departments.id";
$result=mysqli_query($con,$sql);
?>
<h1>DEPARTMENT </h1>
<div class="add1">
<a href="add_department.php">add departments</a>
</div>
<table  id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<tr>
<th>id</th>
<th>department</th>
<th>edit</th>
<th>delete</th>
</tr>
<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['department'];?></td>
<td><a href="edit_department.php?eid=<?php echo $row['id'];?>">edit</a>
<td><a  href="delete_department.php?did=<?php echo $row['id'];?>">delete</a>
</tr>
<?php }?>
</table>
</div>


</div>
<!--end section2-->

</body>
</html>