<?php
include('config/config.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

$sql="SELECT tbl_works.id,A.name as byname,B.name as toname, 
tbl_projects.project_name, tbl_works.description, tbl_works.add_on, tbl_works.deadline, tbl_works.status,
 tbl_works.remarks
FROM tbl_works
INNER JOIN tbl_employees A ON tbl_works.assigned_by = A.id
INNER JOIN tbl_employees B ON tbl_works.assigned_to = B.id 
INNER JOIN tbl_projects ON tbl_works.project_id = tbl_projects.id ";
$result=mysqli_query($con,$sql);


?>
<h1>WORKS</h1>
<div class="add1" >
<a  href="add_works.php"> add works</a>
</div>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
<tr>
<th>id</th>
<th>assigned_by</th>
<th>assigned_to</th>
<th>project_id</th>
<th>description</th>
<th>add_on</th>
<th>deadline</th>
<th>status</th>
<th>remarks</th>
<th>edit</th>
<th>delete</th>
</tr>

<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['byname'];?></td>
<td><?php echo $row['toname'];?></td>
<td><?php echo $row['project_name'];?></td>
<td><?php echo $row['description'];?></td>
<td><?php echo $row['add_on'];?></td>
<td><?php echo $row['deadline'];?></td>
<td><?php echo $row['status'];?></td>
<td><?php echo $row['remarks'];?></td>
<td><a href="edit_works.php?eid=<?php echo $row['id'];?>">edit</a></td>
<td><a href="delete_works.php?did=<?php echo $row['id'];?> ">delete</a></td>
</tr>
<?php }?>

</table>
</div>
</div>

<div class="col-md-2">
</div>
</div>
<!--end section2-->

</body>
</html>