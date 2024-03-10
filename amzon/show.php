
<a href="amzon.php">
<button class="btn btn-dark text-white">insert</button></a>

<?php

$servername="localhost";
$username="root";
$password="";
$databasename="amzon";

$con=mysqli_connect($servername,$username,$password,$databasename);


if($con){

    echo "conection succesfully";
}
else{

    echo "error";
}


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
<th>pname</th>
<th>pprice</th>
<th>pphoto</th>
<th>delete</th>
<th>update</th>
</tr>

<?php

$sql="SELECT * FROM `product` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>




<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['pname'] ?></td>
<td><?php echo $row['pprice'] ?></td>
<td>  <img src="img/<?php echo $row['pphoto'] ?>" style="height:100px;width:150px"> </td>

<td>
    <a href="delete.php?id=<?php echo $row['id'] ?>">
<button class="btn btn-dark text-white">delete</button></a></td>


<td>
    <a href="update.php?id=<?php echo $row['id'] ?>">
<button class="btn btn-dark text-white">update</button></a></td>



</tr>

<?php

}
?>

    </table> 





</body>
</html>