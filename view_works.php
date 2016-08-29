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
        <br />
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
<?php
$con=open_connection();
<<<<<<< HEAD
$sql="SELECT tbl_works.id, A.name as byname,B.name as toname, tbl_projects.project_name, tbl_works.description, tbl_works.add_on, tbl_works.deadline, tbl_works.status, tbl_works.remarks
=======
$sql="SELECT tbl_works.id, A.name,B.name, tbl_projects.project_name, tbl_works.description, tbl_works.add_on, tbl_works.deadline, tbl_works.status, tbl_works.remarks
>>>>>>> 52d786090397035b53804060cf2ca3823d82b522
FROM tbl_works
INNER JOIN tbl_employees A ON tbl_works.assigned_by = A.id
INNER JOIN tbl_employees B ON tbl_works.assigned_to = B.id 
INNER JOIN tbl_projects ON tbl_works.project_id = tbl_projects.id ";
$result=mysqli_query($con,$sql);


?>
<h1>works details</h1>
<table  class="tabl1" border="3">
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
</tr>




<?php }?>

</table>
</div>


</div>
<!--end section2-->

</body>
</html>