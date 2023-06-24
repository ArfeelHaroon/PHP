<?php 
require '../DB/DBconnection.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
     header("Location: ../index.php");
} 

$sql = "DELETE FROM users WHERE id = $id";
$query  = mysqli_query($con,$sql);
if($query){
    header('Location: ../index.php?msg=deleted');
}

?>