

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
    

<div style="background-image: url(img/tour2.png);height:770px;width:100%;background-size:cover;background-size:100% 100%;

">
  <div style="background-color:rgba(8, 36, 112, 0.418);height:100%;width:100%;">
<center>
    <div style="height:170px;"></div>
<div class="col-md-6">
<form method="post">

<h1 class="text-white">TOUR FORM</h1>

<span class="text-white">firstplace</span>
<input type="text" name="firstplace" class="form-control">


<span class="text-white">secondplace</span>
<input type="text" name="secondplace" class="form-control">


<span class="text-white">price</span>
<input type="text" name="price" class="form-control">


<span class="text-white">days</span>
<input type="number" name="days" class="form-control">


<span class="text-white">night</span>
<input type="number" name="night" class="form-control">

<span class="text-white">peoples</span>
<input type="number" name="peoples" class="form-control">

<button class="btn btn-dark text-white" Name="submit">submit</button>



</form>

<a href="show.php"><button class="btn btn-dark text-white">show</button></a>
</div>
</div></div></center>
<?php

if(isset($_POST['submit'])){

    $firstplace=$_POST['firstplace'];
    $secondplace=$_POST['secondplace'];
    $price=$_POST['price'];
    $days=$_POST['days'];
    $night=$_POST['night'];
    $peoples=$_POST['peoples'];
$sql="INSERT INTO `place`( `firstplace`, `secondplace`, `price`, `days`, `night`, `peoples`) VALUES ('$firstplace','$secondplace','$price','$days','$night','$peoples')";

$result=mysqli_query($con,$sql);


if($result){

    echo "<script>alert('data submited')</script>";
 
}
else{
    echo "<script>alert('error')</script>";
}



}

?>




</body>
</html>