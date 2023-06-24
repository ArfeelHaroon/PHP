

<?php 
// $con = mysqli_connect('localhost','root','','admin_lte');
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
require 'DB/DBconnection.php';

$sql = "SELECT * FROM users";
$query = mysqli_query($con,$sql);
$dis = "";
if(mysqli_num_rows($query)>0){
    while($result = mysqli_fetch_assoc($query)){
       $dis.=" <tr>
        <td> $result[id] </td>
        <td> $result[name] </td>
        <td> $result[email] </td>
        <td> <a href='edit/edit.php?id=$result[id]'><button> Edit </button></a> <a href='delete/delete.php?id=$result[id]'><button> Delete </button></a> </td>
        </tr> "; 
    }
}
?>
<a href='create/create.php'><button>Create</button></a>
<table>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php echo $dis; ?>
        
    </tbody>
</table>