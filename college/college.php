
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
    

<form method="post">

<span>firstname</span>
<input type="text" name="firstname" class="form-control">

   
<span>lastname</span>
<input type="text" name="lastname" class="form-control">

   
<span>fithername</span>
<input type="text" name="fithername" class="form-control">

   
<span>mobilenumber</span>
<input type="number" name="mobilenumber" class="form-control">

   
<span>address</span>
<input type="text" name="address" class="form-control">

   
<span>email</span>
<input type="email" name="email" class="form-control">

   
<span>password</span>
<input type="password" name="password" class="form-control">


<button class="btn btn-dark text-white" name="submit">submit</button>

</form>


<?php

if(isset($_POST['submit'])){

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fithername=$_POST['fithername'];
$mobilenumber=$_POST['mobilenumber'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `clg`(`firstname`, `lastname`, `fithername`, `mobilenumber`, `address`, `email`, `password`) VALUES ('$firstname','$lastname','$fithername','$mobilenumber','$address','$email','$password')";
$result=mysqli_query($con,$sql);

if($result){

    echo "data submited";
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