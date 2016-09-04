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
<?php
include('header.php');
?>
<div class="container-fluid sec3">
<div class="container sec3-head">
<div col-md-12>
<?php
$con=open_connection();
$emp_id= $_GET['id'];
 $sql="select *from tbl_employees where tbl_employees.id=$emp_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_Array($result);
 $eid=$row['id'];
 $ename=$row['name'];
 $email=$row['email'];
 $phone=$row['phone'];
 $address=$row['address'];
 $qualification=$row['qualification'];
 $department=$row['department_id'];
 $password=$row['password'];
 $status=$row['status'];
?>
<form action="action_emp_edit.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER EMPLOYEE DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input readonly="readonly" class="form-control" id="eid" name="id" placeholder="Enter id" value="<?php echo $eid?>">
    </div>
<div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $ename?>">
    </div>
<div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $email?>">
    </div>
<div class="form-group">
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" name="phone"placeholder="Enter phone" value="<?php echo $phone?>">
    </div>
<div class="form-group">
      <label for="address">address:</label>
      <textarea  rows="3" cols="5" class="form-control" id="address" name="address" ><?php echo $address?>
      </textarea>
    </div>
<div class="form-group">
      <label for="qualification">qualification:</label>
      <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter qualification" value="<?php  echo $qualification?>">
    </div>
 <div class="form-group">
      <label for="department">department:</label>
      <input type="text" class="form-control" id="department" name="department"placeholder="Enter department" value="<?php echo $department?>">
    </div>
 <div class="form-group">
      <label for="password">password:</label>
      <input type="text" class="form-control" id="password"  name="password"placeholder="Enter password" value="<?php  echo $password?>">
    </div>
<div class="form-group">
      <label for="status">status:</label>
      <input type="text" class="form-control" id="status" name="status" placeholder="Enter status" value="<?php echo $status?>">
    </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>
</div>
</div>
</body>
</html>
