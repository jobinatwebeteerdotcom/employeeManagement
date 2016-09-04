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


<form action="action_leave_add.php" method="POST" enctype="multipart/form-data" class="emp-form">
<h3>ENTER LEAVES DETAILS</h3>
<div class="form-group">
      <label for="id">id:</label>
      <input type="text" class="form-control" id="lid" name="id" placeholder="Enter id">
    </div>
    <div class="form-group">
      <label for="id">employee id:</label>
      <input type="text" class="form-control" id="name" name="eid" placeholder="Enter employee id">
    </div>
    <div class="form-group">
      <label for="id">leave date:</label>
      <input type="text" class="form-control" id="ldate" name="ldate" placeholder="Enter leave date">
    </div>
    <div class="form-group">
      <label for="id">reson:</label>
      <input type="text" class="form-control" id="reson" name="reson" placeholder="Enter reson">
    </div>
    <div class="form-group">
      <label for="id">status:</label>
      <input type="text" class="form-control" id="status" name="status" placeholder="Enter status">
    </div>
   <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>
</div>
</div>
</body>
</html>
