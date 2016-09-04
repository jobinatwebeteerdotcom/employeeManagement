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
$eid= $_GET['eid'];
 $sql="select *from tbl_works where tbl_works.id=$eid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_Array($result);
 $wid=$row['id'];
 $assigned_by=$row['assigned_by'];
 $assigned_to=$row['assigned_to'];
 $project_id=$row['project_id'];
 $description=$row['description'];
 $add_on=$row['add_on'];
 $deadline=$row['deadline'];
 $status=$row['status'];
 $remarks=$row['remarks'];
?>
<form action="action_works_edit.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER EMPLOYEE DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input readonly="readonly" class="form-control" id="eid" name="id" placeholder="Enter id" value="<?php echo $wid?>">
    </div>
<div class="form-group">
      <label for="name">assigned_by:</label>
      <input type="text" class="form-control" id="name" name="assigned_by" placeholder="Enter assigned_by" value="<?php echo $assigned_by?>">
    </div>
<div class="form-group">
      <label for="email">assigned_to:</label>
      <input type="text" class="form-control" id="assigned_to" name="assigned_to" placeholder="Enter assigned_to" value="<?php echo $assigned_to?>">
    </div>
<div class="form-group">
      <label for="phone">project_id:</label>
      <input type="text" class="form-control" id="project_id" name="project_id" placeholder="Enter project_id" value="<?php echo $project_id?>">
    </div>
<div class="form-group">
      <label for="address">description:</label>
    <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" value="<?php echo $description?>" />
      
    </div>
<div class="form-group">
      <label for="qualification">add_on:</label>
      <input type="text" class="form-control" id="add_on" name="add_on" placeholder="Enter add_on" value="<?php  echo $add_on?>">
    </div>
 <div class="form-group">
      <label for="department">deadline:</label>
      <input type="text" class="form-control" id="deadline" name="deadline"placeholder="Enter deadline" value="<?php echo $deadline?>">
    </div>
 <div class="form-group">
      <label for="password">status:</label>
      <input type="text" class="form-control" id="status"  name="status"placeholder="Enter status" value="<?php  echo $status?>">
    </div>
<div class="form-group">
      <label for="status">remarks:</label>
      <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter remarks" value="<?php echo $remarks?>">
    </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>
</div>
</div>
</div>
</body>
</html>
