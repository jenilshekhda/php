
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


<span>email</span>
<input type="email" name="email" class="form-control">


<span>password</span>
<input type="password" name="password" class="form-control">

<button class="btn btn-dark test-white" name="submit">submit</button>


</form>
<?php

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM `data` WHERE `email`='$email'and`password`='$password'";
$result=mysqli_query($con,$sql);

$num=mysqli_num_rows($result);

if($num==1){

    echo "data submited";
    echo "<script>location.href='wel1.php'</script>";
}
else{

    echo "error";
}

}
?>


</body>
</html>

<a href="sign1.php">
<button class="btn btn-dark test-white">login</button></a>