<?php

$servername="localhost";
$username="root";
$password="";
$databasename="college";

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
<th>firstname</th>
<th>lastname</th>
<th>fithername</th>
<th>mobilenumber</th>
<th>address</th>
<th>email</th>
<th>password</th>
<th>delete</th>

<th>update</th>
        </tr>

<?php

$sql="SELECT * FROM `clg` WHERE 1";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){

?>

<tr>

<td><?php echo $row['id'] ?></td>
<td><?php echo $row['firstname'] ?></td>
<td><?php echo $row['lastname'] ?></td>
<td><?php echo $row['fithername'] ?></td>
<td><?php echo $row['mobilenumber'] ?></td>
<td><?php echo $row['address'] ?></td>
<td><?php echo $row['email'] ?></td>
<td><?php echo $row['password'] ?></td>

<td><a href="delete.php?id=<?php echo $row['id'] ?>"><button class="btn btn-dark text-white">delete</button></a></td>
<td><a href="update.php?id=<?php echo $row['id'] ?>"><button class="btn btn-dark text-white">update</button></a></td>
</tr>




<?php
}
?>

    </table>


    <a href="college.php">
<button class="btn btn-dark text-white">show</button></a>


</body>
</html>