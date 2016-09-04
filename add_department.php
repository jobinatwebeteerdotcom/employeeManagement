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

<form action="actio_department_add.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER DEPARTMENT DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input type="text" class="form-control" id="did" name="id" placeholder="Enter id">
    </div>

 <div class="form-group">
      <label for="department">department:</label>
      <input type="text" class="form-control" id="department" name="department"placeholder="Enter department">
      </div>
   
 <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>
