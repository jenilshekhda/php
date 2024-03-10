
<?php

$servername="localhost";
$username="root";
$password="";
$databasename="sign";


$con=mysqli_connect($servername,$username,$password,$databasename);
session_start();

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
<div class="col-md-6">
<div class="row">

    <span>email</span>
    <input type="email"   class="form-control"  name="email">
    
     
    <span>password</span>
    <input type="passeord"   class="form-control"  name="password">
    
    
    <button class="btn btn-dark text-white" name="submit">submit</button>



</div>



</div>

</form>

<?php


if(isset($_POST['submit'])){


    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `data` WHERE `email`='$email'and `password`='$password'";

    $result=mysqli_query($con,$sql);

     $num=mysqli_num_rows($result);

$_SESSION['login']=true;
    
if($num==1){

    echo "data submited";
    echo "<script>location.href='wel.php'</script>";
}

else{

    echo "error";
}




}



?>



<a href="sign.php">
<button class="btn btn-dark test-white">login</button></a>


</body>
</html>