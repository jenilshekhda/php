
<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sign";


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


<span>mobilenumber</span>
<input type="number" name="mobilenumber" class="form-control">


<span>email</span>
<input type="email" name="email" class="form-control">


<span>password</span>
<input type="password" name="password" class="form-control">

<button class="btn btn-dark test-white" name="submit">submit</button>


</form>
<?php

if(isset($_POST['submit'])){

    $fistname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
$sql="INSERT INTO `data`(`firstname`, `lastname`, `mobilenumber`, `email`, `password`) VALUES ('$fistname','$lastname','$mobilenumber','$email','$password')";
$result=mysqli_query($con,$sql);

if($result){

    echo "data submited";
}

else{

    echo "error";
}

}

?>


<a href="login1.php">
<button class="btn btn-dark test-white">signup</button></a>


</body>
</html>

