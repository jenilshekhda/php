





<?php

$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";


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
<body >
    
<form method="post">

    <div style="background-image: url(img/driving1.png);height:830px;width:100%;background-size:cover;background-position:center;
   background-attachment: fixed;background-repeat: no-repeat;">
    

<div class="col-md-12">
    <div class="row">
        <div class="col-md-3"></div>
<div class="col-md-6 rounded" style="background-color: rgba(0, 0, 255, 0.445);">
    
<center>
<h1>DRIVING FORM</h1></center>

<span>firstname</span>
<input type="text"   class="form-control"  name="fname"><br>


<span>lastname</span>
<input type="text"   class="form-control"  name="lname"><br>


<span>fathername</span>
<input type="text"   class="form-control"  name="fathername"><br>


<span>age</span>
<input type="number"   class="form-control"  name="age"><br>

<span>gender</span><br>
<span>male</span>
<input type="radio" name="gender" value="male"><br>
<span>female</span>
<input type="radio" name="gender" value="female"><br><br>

<span>mobilnumber</span>
<input type="number" class="form-control" name="mobilenumber"><br>

<span>address</span>
<input type="text" class="form-control" name="address"><br>

<span>vehicle</span><br>
<span>twowheels</span>
<input type="radio" name="vehicle" value="twowheels"><br>
<span>fourwheels</span>
<input type="radio" name="vehicle" value="fourwheels"><br>
<span>manymoreoptions</span>
<input type="radio" name="vehicle" value="both"><br><br>

<button class="btn  btn-dark text-light col-md-2" name="submit">submit</button>


</div>


</div>
</div>
</div>


</form>

<?php

if(isset($_POST['submit'])){

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$fathern=$_POST['fathername'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobilen=$_POST['mobilenumber'];
$add=$_POST['address'];
$vehicle=$_POST['vehicle'];
$sql="INSERT INTO `driving`(`firstname`, `lastname`, `fathername`, `age`, `gender`, `mobilenumber`, `address`, `wheel`) VALUES ('$fn','$ln','$fathern','$age','$gender','$mobilen','$add','$vehicle')";
$result=mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data submited')<script>";
}
else{

    echo "error";
}


}

?>

<a href="show.php">
<button class="btn btn-dark text-white">insert</button></a>





</body>
</html>