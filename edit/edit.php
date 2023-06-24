<?php 
require '../DB/DBconnection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    return ('index.php');
} 
$sql = "SELECT * FROM users WHERE id = $id";
$query =  mysqli_query($con,$sql);
$result = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="edit_query.php" method="post">
        <input type="hidden" value="<?php echo $result['id']?>" name='id'>
        <label for='Name'>Name:</label> <input type="text" value="<?php echo $result['name']?>" name='name'> 
        <label for='Email'>Email:</label> <input type="text" value="<?php echo $result['email']?>" name='email'>
        <input type='submit' value='Edit'>

    </form>
</body>
</html>