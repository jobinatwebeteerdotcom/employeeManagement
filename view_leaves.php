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
$sql="SELECT tbl_leaves.id, tbl_employees.name, tbl_leaves.leave_date, tbl_leaves.reson, tbl_leaves.status
FROM tbl_leaves
INNER JOIN tbl_employees ON tbl_leaves.employee_id = tbl_employees.id
order by tbl_leaves.id";
$result=mysqli_query($con,$sql);
?>
<h1>LEAVES</h1>
<div class="add1" >
<a  href="add_leaves.php"> add leaves</a>
</div>

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<tr>
<th>id</th>
<th>employee_id</th>
<th>leave_date</th>
<th>reson</th>
<th>status</th>
<th>edit</th>
<th>delete</th>
</tr>
<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['name']?></td>
<td><?php echo $row['leave_date']?></td>
<td><?php echo $row['reson']?></td>
<?php
if( $row['status']==1)
{?>
<td><?php echo 'aproved'?></td>
<?php }
 
else if( $row['status']==0)

{?>
<td><?php echo 'pending'?></td>

<?php }
else if( $row['status']==-1)

{?>
<td><?php echo 'reject'?></td>

<?php }?>
<td><a href="edit_leaves.php?eid=<?php echo $row['id'];?>">edit</a></td>
<td><a href="delete_leaves.php?did=<?php echo $row['id'];?> ">delete</a></td>


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