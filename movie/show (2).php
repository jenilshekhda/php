<?php

$servername="localhost";
$username="root";
$password="";
$databasename="movie";

$con=mysqli_connect($servername,$username,$password,$databasename);
 
if($con){

    echo "connection succesfully";

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
    <th>moviename</th>
    <th>heroname</th>
    <th>baget</th>
    <th>rating</th>
</tr>

<?php
    
$sql="SELECT * FROM `INFORMATION` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){



?>

<tr>
    <td><?php  echo $row['id']  ?></td>
    <td><?php  echo $row['moviename']  ?></td>
    <td><?php  echo $row['heroname']  ?></td>
    <td><?php  echo $row['baget']  ?></td>
    <td><?php  echo $row['rating']  ?></td>


   <td><a href="delete.php?id=<?php echo $row['id']  ?>"> <button  class="btn btn-dark text-light">delete</button></a></td>


</tr>




<?php
}
?>






    </table>




    <a href="information.php"><button  class="btn btn-dark text-light">insert</button></a>


</body>
</html>