<?php
include'ConnectToDb.php';
$id=$_GET['id'];

$del_parent=mysqli_query($connection,"DELETE from citizens where id='$id'");
if($del_parent){
  header('location:CitizenDetails.php');
}
else{
  echo "something Went wrong";
   header('location:CitizenDetails.php');
}



?>