

<a href="adharcard.php"><button>insert page</button></a>



<?php

$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";


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
    

    <div class="container mt-3">
              
        <table class="table table-bordered">
   






            <tr>
              <th>id</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>adharid</th>
              <th>address</th>
              <th>mobilenumber</th>
              <th>dob</th>


            </tr>


<?php

$sql="SELECT * FROM `adharcardid` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){




?>


    
            <tr>
              <td><?php  echo $row['id'] ?></td>
              <td><?php echo $row['firstname']?></td>
              <td><?php  echo $row['lastname']   ?></td>
              <td><?php  echo $row['adharid']   ?></td>
              <td><?php  echo $row['address']   ?></td>
              <td><?php  echo $row['mobilenumber']   ?></td>
              <td><?php  echo $row['dob']   ?></td>

              <td><a href="delete.php?id=<?php  echo $row['id'] ?>"><button class="btn btn-dark text-white">delete</button></a></td>
              <td><a href="upadate.php?id=<?php  echo $row['id'] ?>"><button class="btn btn-dark text-white">upadate</button></a></td>
              
            </tr>
      <?php 
}


      ?>
            

          
        </table>
      </div>

      

</body>
</html>