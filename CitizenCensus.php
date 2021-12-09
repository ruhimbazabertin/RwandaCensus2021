<?php include"CitizenCrudFunction.php"?>
<?php
create();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Citizen</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <style type="text/css">
    .field{
      border: 2px solid purple;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header field" style="background-color: blue;font-weight: bold;color: white;text-align: center; height: 50px;padding-top: 10px;">
      RWANDA CITIZEN CENSUS 2021
    </div>
    <center>
    <div class="row">
      <div class="col-md-10" style="border-color:red">
<form action="CitizenCensus.php" method="post" enctype="multipart/form-data">

<div class="form-group">
  <div class="col-md-6">
    <label for="firstname"><b>FirstName:</b></label>
    <input type="text" name="firstname" class="form-control field" />
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
  <label for="lastname"><b>LastName:</b></label>
    <input type="text" name="lastname" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="idNo"><b>Identity:</b></label>
    <input type="text" name="identity" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="address"><b>Address:</b></label>
    <input type="text" name="address" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="birthdate"><b>BirthDate:</b></label>
    <input type="date" name="birthdate" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="income"><b>IncomePerYear:</b></label>
    <input type="number" name="income" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
  <label for="class"><b>CitizenClass</b></label>
    <select name="category_id" class="form-control field">
      <?php
      findCitizenClass();
      ?>
    </select>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <input type="file" name="picture" class="form-control field" />
  </div>
</div>
<div class="col-md-6">
  <button type="submit" name="submit" class="btn btn-primary btn-block"><b>SAVE</b></button>
  </div>
  </form>
</div>
</div>
  </div>
</body>
</html>
