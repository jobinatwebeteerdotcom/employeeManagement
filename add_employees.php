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
<!-- start section1-->
<?php
include('header.php');
?>
<!-- end section1-->
<div class="container-fluid sec3">
<div class="container sec3-head">
<div col-md-12>

<form action="action_emp_add.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER EMPLOYEE DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input type="text" class="form-control" id="eid" name="id" placeholder="Enter id">
    </div>
<div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
<div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
<div class="form-group">
      <label for="phone">phone:</label>
      <input type="text" class="form-control" id="phone" name="phone"placeholder="Enter phone">
    </div>
<div class="form-group">
      <label for="address">address:</label>
      <textarea  rows="3" cols="5" class="form-control" id="address" name="address" placeholder="Enter address">
      </textarea>
    </div>
<div class="form-group">
      <label for="qualification">qualification:</label>
      <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter qualification">
    </div>
 <div class="form-group">
      <label for="department">department id:</label>
      <input type="text" class="form-control" id="department" name="department"placeholder="Enter department">
    </div>
 <div class="form-group">
      <label for="password">password:</label>
      <input type="text" class="form-control" id="password"  name="password"placeholder="Enter password">
    </div>
<div class="form-group">
      <label for="status">status:</label>
      <input type="text" class="form-control" id="status" name="status" placeholder="Enter status">
    </div>
 <button type="submit" class="btn btn-default">Submit</button>

</form>


</div>
</div>
</div>
</body>
</html>

