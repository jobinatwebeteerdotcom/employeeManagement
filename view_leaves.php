<?php
include('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css" />
<script src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<!--start section1-->
<div class="container-fluid sec1">
<div class="container sec1_head">
<div class="col-md-12">
<div class="col-md-7">
</div>
<div class="col-md-5">
<h4>Welcome shija</h4>
<img src="images/pic1.png" />
<select class="option1">
<option value="null"></option>
<option value="logout">logout</option>
<option value="settings">settings</option>
</select>
</div>
</div>

</div>
</div>
<!--end section1-->
<!--start section2-->
<div class="container-fluid sec2">
<div class="col-md-3">
<nav class="navbar navbar-default">
<ul class="nav navbar-nav nav_home">
        <li class="active"><a href="#">Home</a></li>
        <br />
        <li><a href="#">COMAPNY PROFILE</a></li>
        <li><a href="#">PRODUCT LIST</a></li>
        <li><a href="#">CURRENT INVENTORY</a></li>
        <li><a href="#">INTERNATIONAL SOURCING</a></li>
        <li><a href="#">LOGISTICS</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">EMPLOYMENT OPPORTUNITIES</a></li>
      </ul>
   
</nav>
</div>

<div class="col-md-9">
<?php
$con=open_connection();
$sql="SELECT tbl_leaves.id, tbl_employees.name, tbl_leaves.leave_date, tbl_leaves.reson, tbl_leaves.status
FROM tbl_leaves
INNER JOIN tbl_employees ON tbl_leaves.employee_id = tbl_employees.id";
$result=mysqli_query($con,$sql);
?>
<h1>leaves details</h1>

<table border=3>
<tr>
<th>id</th>
<th>employee_id</th>
<th>leave_date</th>
<th>reson</th>
<th>status</th>
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

</tr>

<?php }?>
</table>
</div>


</div>
<!--end section2-->


</body>
</html>