<?php include"ConnectToDb.php"?>
<?php
function create(){
   global $connection;
  if(isset($_POST['submit'])){

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $identity  = $_POST['identity'];
    $address   = $_POST['address'];
    $birthDate = $_POST['birthdate'];
    $income    = $_POST['income'];
    //$image     = $_POST['picture'];
    $image = $_FILES['picture']['name'];
    $image_temp=$_FILES['picture']['tmp_name'];
  move_uploaded_file($image_temp,"images/$image");
    $category_id = $_POST['category_id'];
$query ="INSERT INTO citizens(firstname,lastname,identity,address,birth_date,income,picture,category_id)VALUES('$firstname','$lastname','$identity','$address','$birthDate','$income','$image','$category_id')";
$result = mysqli_query($connection,$query);
if(!$result){
  die("QUERY FAILED".mysqli_error());
}else{
  echo "<script>alert('CITIZEN INSERTED PROPERLY!!!');window.location.replace('CitizenDetails.php')</script>";
}
}
}

function findCitizenClass(){
  global $connection;
  $query = "SELECT * FROM categories";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("QUERY FAILED".mysqli_error());
  }
  while($category = mysqli_fetch_assoc($result)){
    $id = $category['id'];
  echo "<option value='$id'>".$category['category_type']."</option>";
  }

}
function findAll(){
  global $connection;
  $query = "SELECT *, (select category_type from categories where id = category_id) category_type FROM citizens";
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("QUERY FAILED.".mysqli_error());
  }
  while($citizen =mysqli_fetch_assoc($result)){

  $id =$citizen['id'];
  $firstname=$citizen['firstname'];
  $lastname=$citizen['lastname'];
  $identity=$citizen['identity'];
  $address=$citizen['address'];
  $birthdate=$citizen['birth_date'];
  $image=$citizen['picture'];
  $income=$citizen['income'];
  $category=$citizen['category_type'];
echo "</tr>";
echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$firstname."</td>";
echo "<td>".$lastname."</td>";
echo "<td>".$identity."</td>";
echo "<td>".$address."</td>";
echo "<td>".$birthdate."</td>";
echo "<td><img src='images/$image' width='50' height='50' alt='image'/></td>";
echo "<td>".$income."</td>";
echo "<td>".$category."</td>";
echo "<td><a href='update.php?edit={$id}'>Edit</a></td>";
echo "<td><a href='delete.php?id={$id}'>Delete</a></td>";
echo "</tr>";

  }
  }
  function updateCitizen(){

    global $connection,$citizenId;
      //collect all data from the form here
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $identity = $_POST['identity'];
      $address = $_POST['address'];
      $birthdate=$_POST['birthdate'];
      $income   = $_POST['income'];
      $image = $_FILES['picture']['name'];
    $image_temp=$_FILES['picture']['tmp_name'];
     $id = $_POST['id'];
      move_uploaded_file($image_temp,"images/$image");
      $category_type = $_POST['category_id'];
      
      $query = "UPDATE citizens SET
                  firstname = '$firstname',
                  lastname = '$lastname',
                  identity = '$identity',
                  address  = '$address',
                birth_date='$birthdate',
                income = '$income',
                picture = '$image',
                category_id = '$category_type'
                WHERE id ='$id'";
    $result = mysqli_query($connection,$query);
    if(!$result){
      die("QUERY FAILED.".mysqli_error($connection,$query));
    }
    else{
      echo"<script>alert('well done to uptade');window.location.replace('CitizenDetails.php')</script>";
    }
    }
?>