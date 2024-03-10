<?php

$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

// if($con){

//     echo "connection succesfully";
// }
 
// else{

//     echo "error";
// }

$sql="SELECT * FROM `driving` WHERE 1";

$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))

{
 
    echo $row['id'];

    echo $row['firstname'];
    echo $row['lastname'];
    echo $row['fathername'];
    echo $row['age'];
    echo $row['gender'];
    echo $row['mobilenumber'];
 echo $row['address'];
 echo$row['wheel'];
 echo "<br>";
 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <title>Document</title>
</head>
<body>
    
    <table border="1px">

        <tr>

<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>fathername</th>
<th>age</th>
<th>gender</th>
<th>mobilenumber</th>
<th>address</th>
<th>wheel</th>

        </tr>

<?php

$sql="SELECT * FROM `driving` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))

{
?>

        <tr>
            <td><?php echo $row['id']  ?></td>
            <td><?php  echo $row['firstname'] ?></td>
            <td><?php  echo $row['lastname'] ?></td>
            <td><?php  echo $row['fathername'] ?></td>
            <td><?php  echo $row['age'] ?></td>
            <td><?php  echo $row['gender'] ?></td>
            <td><?php  echo $row['mobilenumber'] ?></td>
            <td><?php  echo $row['address'] ?></td>
            <td><?php  echo $row['wheel'] ?></td>

 <td><a href="delete.php?id=<?php  echo $row['id'] ?>"><button class="btn btn-dark text-white">delete</button></a></td>
<td><a href="upadate.php?id=<?php  echo $row['id'] ?>"><button class="btn btn-dark text-white">upadate</button></a></td>


        </tr>


<?php
}

?>



    </table>

<a href="driving.php">
<button class="btn btn-dark text-white">insert</button></a>

</body>
</html>