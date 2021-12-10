<?php include"CitizenCrudFunction.php"?>
<!DOCTYPE html>
<html>
<head>
  <title>Citizen</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style type="text/css">
    .field{
      border: 2px solid purple;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header field" style="background-color: blue;font-weight: bold;color: white;text-align: center; height: 50px;padding-top: 10px;">
      RWANDA CITIZEN DETAILS INFO 2021
    </div>
    <center>
<div class="jumbotron" style="background-color: pink">
  <span style="margin-left: 700px;"><i><a href="CitizenCensus.php" style="color:red;font-size: 30px;"><i class="fa fa-user"></i>ADD CITIZEN<i class="fa fa-university"></a></span>
            <table class="table table-dark">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First_name</th>
                  <th>Last_name</th>
                  <th>Identity</th>
                  <th>Address</th>
                  <th>Birth_date</th>
                  <th>Picture</th>
                  <th>Income</th>
                  <th>Category</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>          
         <tbody>
          <?php
          findAll();
          ?>
         </tbody>
       </table>
         
  </div>
  </div>
</body>
</html>
