<a href="insert.php">insert page</a>

<?php


$server="localhost";
$user="root";
$psd="";
$db="student";

$con=mysqli_connect($server,$user,$psd,$db);

// if($con){
//     echo "<script>alert('success')</script>";

// }

// else{
//     echo "<script>alert('erroorrororoor')</script>";

// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
          
  <table class="table table-dark table-hover">
   
      <tr>
        <th>id</th>
        <th>sname</th>
        <th>scourse</th>
        <th>pr</th>
        <th>fees</th>
        <th>dele button</th>
      </tr>

<?php

$sql="SELECT `id`, `sname`, `scourse`, `pr`, `fees` FROM `data` WHERE 1";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>

      <tr>
        <td><?php  echo $row['id']  ?></td>
        <td><?php  echo $row['sname']  ?></td>
        <td><?php  echo $row['scourse']  ?></td>
        <td><?php  echo $row['pr'] ?>%        </td>
        <td><?php  echo $row['fees']  ?></td>
        <td><a href="delete.php?id=<?php  echo $row['id']  ?>"><button>delete</button></a></td>
        <td><a href="update.php?id=<?php  echo $row['id']  ?>"><button>update</button></a></td>
      </tr>


      <?php

}
?>
   
  </table>


  </div>
</body>
</html>