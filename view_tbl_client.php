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
<h4>Welcome NIMI</h4>
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
$sql="SELECT * 
FROM  `tbl_clients`";
$result=mysqli_query($con,$sql);

?>
<table border="3" class="table-border">
<tr>
<th>Id</th>
<th>Client name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
</tr>
<?php
while($row=mysqli_fetch_Array($result))
{?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['client_name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['address'];?></td>
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