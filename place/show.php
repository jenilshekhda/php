<a href="place.php"><button class="btn btn-dark text-white">inset</button></a>

<?php
$servername="localhost";
$username="root";
$password="";
$databasename="tours";

$con=mysqli_connect($servername,$username,$password,$databasename);

// if($con){

//     echo "<script>alert('conection succesfully')</script>";
// }
// else{
//     echo "<script>alert('error')</script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
 
    <table class="table">
  
<tr>
   
    <th>id</th>
    <th>firstplace</th>
    <th>secondplace</th>
    <th>price</th>
    <th>days</th>
    <th>night</th>
    <th>people</th>
    <th>delete</th>
    <th>update</th>

    
</tr>

<?php
$sql="SELECT * FROM `place` WHERE 1";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

?>



<tr>

    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['firstplace'] ?></td>
    <td><?php echo $row['secondplace'] ?></td>
    <td><?php echo $row['price'] ?></td>
    <td><?php echo $row['days'] ?></td>
    <td><?php echo $row['night'] ?></td>
    <td><?php echo $row['peoples'] ?></td>

  <td>
<a href="delete.php?id=<?php echo $row['id'] ?>">
  <button class="btn btn-info text-white">delete</button></a></td>  
   
  <td>
<a href="upadate.php?id=<?php echo $row['id'] ?>">
  <button class="btn btn-danger text-white">update</button></a></td>  

</tr>

<?php
}
?>

    </table>
   
</body>
</html>