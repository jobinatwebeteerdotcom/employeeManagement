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
$sal_id= $_GET['eid'];
$sql="select *from tbl_salary where tbl_salary.id=$sal_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_Array($result);
$sid=$row['id'];
$employee_id=$row['employee_id'];
$bs=$row['bs'];
$ta=$row['ta'];
$pf=$row['pf'];
$total_salary=$row['total_salary'];
$date_from=$row['date_from'];



 
?>
<form action="action_sal_edit.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER SALARYs DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input readonly="readonly" class="form-control" id="did" name="id" placeholder="Enter id" value="<?php echo $sid?>">
    </div>

 <div class="form-group">
      <label for="department">employee_id:</label>
      <input type="text" class="form-control" id="department" name="empid"placeholder="Enter department" value="<?php echo $employee_id?>">
    </div>
     <div class="form-group">
      <label for="department">bs</label>
      <input type="text" class="form-control" id="department" name="bs"placeholder="Enter department" value="<?php echo $bs?>">
    </div>
     <div class="form-group">
      <label for="department">ta:</label>
      <input type="text" class="form-control" id="department" name="ta"placeholder="Enter department" value="<?php echo $ta?>">
    </div>
     <div class="form-group">
      <label for="department">pf:</label>
      <input type="text" class="form-control" id="department" name="pf"placeholder="Enter department" value="<?php echo $pf?>">
    </div>
     <div class="form-group">
      <label for="department">total_salary:</label>
      <input type="text" class="form-control" id="department" name="tsal"placeholder="Enter department" value="<?php echo $total_salary?>">
    </div>
     <div class="form-group">
      <label for="department">date from:</label>
      <input type="text" class="form-control" id="department" name="datef"placeholder="Enter department" value="<?php echo $date_from?>">
    </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>