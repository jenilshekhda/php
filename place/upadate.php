<a href="show.php"><button class="btn btn-dark text-white">show</button></a>

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
    
<div class="col-md-6">
<form method="post">


<?php
$id=$_GET['id'];
$sql="SELECT `id`, `firstplace`, `secondplace`, `price`, `days`, `night`, `peoples` FROM `place` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

?>


<span>firstplace</span>
<input type="text" name="firstplace" class="form-control" value="<?php echo $row['firstplace'] ?>">


<span>secondplace</span>
<input type="text" name="secondplace" class="form-control" value="<?php echo $row['secondplace'] ?>">


<span>price</span>
<input type="text" name="price" class="form-control" value="<?php echo $row['price'] ?>">


<span>days</span>
<input type="number" name="days" class="form-control" value="<?php echo $row['days'] ?>">


<span>night</span>
<input type="number" name="night" class="form-control" value="<?php echo $row['night'] ?>">

<span>peoples</span>
<input type="number" name="peoples" class="form-control" value="<?php echo $row['peoples'] ?>">

<button class="btn btn-dark text-white" Name="submit">submit</button>
</form>
</div>

<?php

if(isset($_POST['submit'])){

    $firstplace=$_POST['firstplace'];
    $secondplace=$_POST['secondplace'];
    $price=$_POST['price'];
    $days=$_POST['days'];
    $night=$_POST['night'];
    $peoples=$_POST['peoples'];

    
$id=$_GET['id'];
$sql="UPDATE `place` SET `firstplace`='$firstplace',`secondplace`='$secondplace',`price`='$price',`days`='$days',`night`='$night',`peoples`='$peoples' WHERE `id`='$id'";

$result=mysqli_query($con,$sql);


if($result){

    echo "<script>alert('data submited')</script>";
   echo "<script>location.href='show.php'</script>";

}
else{
    echo "<script>alert('error')</script>";
}



}

?>





</body>
</html>