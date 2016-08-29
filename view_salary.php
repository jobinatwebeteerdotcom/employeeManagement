
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
<div class="col-md-2">
<nav class="navbar navbar-default">
<ul class="nav navbar-nav nav_home">
        <li class="active"><a href="#">Home</a></li>
      
         <li><a href="#">EMPLOYEES</a></li>
        <li><a href="#">DEPARTMENT</a></li>
        <li><a href="#">SALARY</a></li>
        <li><a href="#">LEAVES</a></li>
        <li><a href="#">CLIENTS</a></li>
        <li><a href="#">PROJECTS</a></li>
         <li><a href="#">ADMIN</a></li>
        <li><a href="#">TEAMS</a></li>
         <li><a href="#">TEAM MEMBERS</a></li>
          <li><a href="#">WORKS</a></li>
      </ul>
   
</nav>
</div>

<div class="col-md-10">
<div class="col-md-3">
</div>
<?php
$con=open_connection();
$sql="SELECT tbl_salary.id, tbl_employees.name, tbl_salary.bs, tbl_salary.ta, tbl_salary.pf, tbl_salary.total_salary, tbl_salary.date_from
FROM tbl_salary
INNER JOIN tbl_employees ON tbl_salary.employee_id = tbl_employees.id";
$result=mysqli_query($con,$sql);

?>
<div class="col-md-5">
<h1>salary details</h1>
<table  class="tabl1" border="3">
<tr>
<th>id</th>
<th>employee_id</th>
<th>bs</th>
<th>ta</th>
<th>pf</th>
<th>total_salary</th>
<th>date_from</th>
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