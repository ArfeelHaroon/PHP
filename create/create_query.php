<?php 
  require '../DB/DBconnection.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
//   echo $name
  $sql = "INSERT into users SET name='$name', email = '$email'";
  $query = mysqli_query($con , $sql);
if($query){
    header('Location: ../index.php?msg=created');
}else{ header('Location: ../index.php?msg=Error');
}
?>
