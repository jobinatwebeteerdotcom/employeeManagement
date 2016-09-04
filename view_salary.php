
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
$sql="SELECT tbl_salary.id,tbl_employees.name, tbl_salary.bs, tbl_salary.ta, tbl_salary.pf, tbl_salary.total_salary, tbl_salary.date_from
FROM tbl_salary
INNER JOIN tbl_employees ON tbl_salary.employee_id = tbl_employees.id order by tbl_salary.id";
$result=mysqli_query($con,$sql);

?>
<h1>SALARY</h1>
<div class="add1" >
<a  href="add_salary.php"> add salary</a>
</div>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<tr>
<th>id</th>
<th>employee_id</th>
<th>bs</th>
<th>ta</th>
<th>pf</th>
<th>total_salary</th>
<th>date_from</th>
<th>edit</a></th>
<th>edit</a></th>
</tr>

<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['bs'];?></td>
<td><?php echo $row['ta'];?></td>
<td><?php echo $row['pf'];?></td>
<td><?php echo $row['total_salary'];?></td>
<td><?php echo $row['date_from'];?></td>
<td><a href="edit_salary.php?eid=<?php echo $row['id'];?>">edit</a></td>
<td><a href="delete_salary.php?did=<?php echo $row['id'];?> ">delete</a></td>
</tr>




<?php }?>

</table>
</div>
<div class="col-md-1">
</div>
</div>


</div>
<!--end section2-->

</body>
</html>