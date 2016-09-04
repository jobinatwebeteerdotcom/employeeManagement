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


<form action="action_salary_add.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER SALARY DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input type="text" class="form-control" id="sid" name="id" placeholder="Enter id">
    </div>
    <div class="form-group">
      <label for="id">employee id:</label>
      <input type="text" class="form-control" id="name" name="eid" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="id">bs:</label>
      <input type="text" class="form-control" id="bs" name="bs" placeholder="Enter bs">
    </div>
    <div class="form-group">
      <label for="id">ta:</label>
      <input type="text" class="form-control" id="ta" name="ta" placeholder="Enter ta">
    </div>
    <div class="form-group">
      <label for="id">pf:</label>
      <input type="text" class="form-control" id="pf" name="pf" placeholder="Enter pf">
    </div>
    <div class="form-group">
      <label for="id">total salary:</label>
      <input type="text" class="form-control" id="tsal" name="tsal" placeholder="Enter total salary">
    </div>

 <div class="form-group">
      <label for="department">date from:</label>
      <input type="text" class="form-control" id="date" name="datef"placeholder="Enter date from">
      </div>
   
 <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>
