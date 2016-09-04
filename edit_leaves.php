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
<div class="container-fluid sec3">
<div class="container sec3-head">
<div col-md-12>
<?php
$con=open_connection();
$lid= $_GET['eid'];

$sql="select *from tbl_leaves where tbl_leaves.id=$lid";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_Array($result);
$lid=$row['id'];
 $eid=$row['employee_id'];
 $ldate=$row['leave_date'];
 $reson=$row['reson'];
 $status=$row['status'];



 
?>
<form action="action_leave_edit.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER LEAVE DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input readonly="readonly" class="form-control" id="lid" name="id" placeholder="Enter id" value="<?php echo $lid?>">
    </div>

 <div class="form-group">
      <label for="department">employee_id:</label>
      <input type="text" class="form-control" id="empid" name="empid"placeholder="Enter department" value="<?php echo $eid?>">
    </div>
     <div class="form-group">
      <label for="department">leave date</label>
      <input type="text" class="form-control" id="date" name="ldate"placeholder="Enter department" value="<?php echo $ldate?>">
    </div>
     <div class="form-group">
      <label for="department">reson:</label>
      <input type="text" class="form-control" id="reson" name="reson"placeholder="Enter department" value="<?php echo $reson?>">
    </div>
     <div class="form-group">
      <label for="department">status:</label>
      <input type="text" class="form-control" id="status" name="status"placeholder="Enter department" value="<?php echo $status?>">
    </div>
  
 <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>