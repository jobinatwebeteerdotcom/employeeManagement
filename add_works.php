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


<form action="action_works_add.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER WORKS DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input type="text" class="form-control" id="wid" name="id" placeholder="Enter id">
    </div>
    <div class="form-group">
      <label for="id">assigned by:</label>
      <input type="text" class="form-control" id="aby" name="aby" placeholder="assigned by">
    </div>
    <div class="form-group">
      <label for="id">assigned to:</label>
      <input type="text" class="form-control" id="ato" name="ato" placeholder="assigned to">
    </div>
    <div class="form-group">
      <label for="id">project id:</label>
      <input type="text" class="form-control" id="pid" name="pid" placeholder="project id">
    </div>
    <div class="form-group">
      <label for="id">description:</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
    </div>
    <div class="form-group">
      <label for="id">add on:</label>
      <input type="text" class="form-control" id="add" name="add" placeholder="Enter add on">
    </div>

 <div class="form-group">
      <label for="department">deadline:</label>
      <input type="text" class="form-control" id="deadline" name="deadline"placeholder="Enter deadline">
      </div>
       <div class="form-group">
      <label for="department">status:</label>
      <input type="text" class="form-control" id="status" name="status"placeholder="Enter status">
      </div>
       <div class="form-group">
      <label for="department">remarks:</label>
      <input type="text" class="form-control" id="remarks" name="remark"placeholder="Enter remarks">
      </div>
      


   
 <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>
