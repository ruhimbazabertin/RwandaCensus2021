<?php include"CitizenCrudFunction.php"?>
<?php include"ConnectToDb.php"?>
<?php
if(isset($_GET['edit'])){
  $citizenId = $_GET['edit'];
  $query = "SELECT * FROM citizens WHERE id=$citizenId";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("QUERY FAILED".mysqli_error($connection,$query));
  }
 $citizen = mysqli_fetch_assoc($result);
  $firstname=$citizen['firstname'];
  $lastname=$citizen['lastname'];
  $identity=$citizen['identity'];
  $address=$citizen['address'];
  $birthdate=$citizen['birth_date'];
  $image=$citizen['picture'];
  $income=$citizen['income'];
}
if (isset($_POST['update'])) {
  updateCitizen();
}
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
<form action="Update.php" method="post" enctype="multipart/form-data">

<div class="form-group">
  <div class="col-md-6">
    <label for="firstname"><b>FirstName:</b></label>
    <input type="text" name="firstname" value="<?php echo $firstname?>" class="form-control field" />
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
  <label for="lastname"><b>LastName:</b></label>
    <input type="text" name="lastname" value="<?php echo $lastname ?>" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="idNo"><b>Identity:</b></label>
    <input type="text" name="identity" value="<?php echo $identity ?>" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="address"><b>Address:</b></label>
    <input type="text" name="address" value="<?php echo $address ?>" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="birthdate"><b>BirthDate:</b></label>
    <input type="date" name="birthdate" value="<?php echo $birthdate ?>" class="form-control field"/>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6">
    <label for="income"><b>IncomePerYear:</b></label>
    <input type="number" name="income" value="<?php echo $income ?>" class="form-control field"/>
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
<input type="hidden" name="id" value="<?php echo $citizenId ?>">
<div class="col-md-6">
  <button type="submit" name="update" class="btn btn-primary btn-block"><b>UPDATE</b></button>
  </div>
  </form>
</div>
</div>
  </div>
</body>
</html>
