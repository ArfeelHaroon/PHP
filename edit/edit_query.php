<?php
require '../DB/DBconnection.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id = $id";
$query = mysqli_query($con,$sql);
if($query){
 header('Location: ../index.php');
}else{
    echo 'error';
}
?>