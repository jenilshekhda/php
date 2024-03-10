<a href="movie.php"><button>insertpage</button></a>
<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="movie";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"contection sucessfull";
}
else{
 echo"error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <table class="table">
      
    <tr>
      <th>id</th>
      <th>moviename</th>
      <th>heroname</th>
      <th>heroinename</th>
      <th>buget</th>
      <th>rating</th>


     </tr>
     <?php
     $sql="SELECT * FROM `movie information` WHERE 1";
     $result=mysqli_query($con,$sql);
     while($row=mysqli_fetch_array($result)){



     ?>

     <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['moviename']?></td>
        <td><?php echo $row['heroename']?></td>
        <td><?php echo $row['heroinename']?></td>
        <td><?php echo $row['buget']?></td>
        <td><?php echo $row['rating']?></td>
        <td><a href="delete.php?id=<?php echo $row['id']?>"><button>delete</button></a></td>
     </tr> 
 <?php
    }
    ?>
    </table>
   
</body>
</html>