<?php
 require_once('config/config.php');
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
       <li><a href="index.php">EMPLOYEES</a></li>
        <li><a href="view_department.php">DEPARTMENT</a></li>
        <li><a href="view_salary.php">SALARY</a></li>
        <li><a href="view_leaves.php">LEAVES</a></li>
        <li><a href="view_tbl_client.php">CLIENTS</a></li>
        <li><a href="view_tbl_projects.php">PROJECTS</a></li>
         <li><a href="view_admin.php">ADMIN</a></li>
        <li><a href="view_tbl_team.php">TEAMS</a></li>
         <li><a href="view_tbl_team_members.php">TEAM MEMBERS</a></li>
          <li><a href="view_works.php">WORKS</a></li>
      </ul>
   
</nav>
</div>

<div class="col-md-10">
<div class="col-md-3">
</div>
<?php
$con=open_connection();
$sql="select * from tbl_admin";
$result=mysqli_query($con,$sql);

?>
<div class="col-md-5">

<h1>ADMIN</h1>
<table border="3" class="table-border">
<tr>
<th>id</th>
<th>user name</th>
<th>password</th>
<th>status</th>
<th>type</th>

</tr>
<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['user_name'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['status'];?></td>
<td><?php echo $row['type'];?></td>

</tr>
<?php
}
?>
</table>
</div>
</div>
<div class="col-md-1">
</div>

</div>
<!--end section2-->


</body>
</html>