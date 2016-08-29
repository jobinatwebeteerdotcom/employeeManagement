<?php
 require_once('config/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/nimistyle.css" />


<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid sec1">
<div class="container sec1_head">

<div class="col-md-12">
<div class="col-md-7">
</div>
<div class="col-md-5">
<h4>Welcome Nimi</h4>
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
/*$sql="select * from tbl_projects"*/
$sql1="SELECT tbl_team_members.id,  tbl_employees.name,tbl_team.team_name
FROM tbl_team_members
INNER JOIN tbl_team
ON tbl_team_members.team_id = tbl_team.id
inner join tbl_employees
  on tbl_employees.id=tbl_team_members.employee_id
  order by tbl_team_members.id";
$result=mysqli_query($con,$sql1);

?>


<table border="3" class="table-border">
        
<tr>
<th>Id</th>
<th>Name</th>
<th>team_name</th>


</tr>
<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['team_name'];?></td>

</tr>
<?php
}
?>
</table>
</div>


</div>
<!--end section2-->


</body>
</html>