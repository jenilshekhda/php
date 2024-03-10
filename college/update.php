
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


<?php
$id=$_GET['id'];
$sql="SELECT * FROM `clg` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

?>



<span>firstname</span>
<input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname'] ?>">

   
<span>lastname</span>
<input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname'] ?>">

   
<span>fithername</span>
<input type="text" name="fathername" class="form-control" value="<?php echo $row['fithername'] ?>">

   
<span>mobilenumber</span>
<input type="number" name="mobilenumber" class="form-control" value="<?php echo $row['mobilenumber'] ?>">

   
<span>address</span>
<input type="text" name="address" class="form-control" value="<?php echo $row['address'] ?>">

   
<span>email</span>
<input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">

   
<span>password</span>
<input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>">


<button class="btn btn-dark text-white" name="submit">submit</button>

</form>


<?php

if(isset($_POST['submit'])){

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$fithername=$_POST['fathername'];
$mobilenumber=$_POST['mobilenumber'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];


$id=$_GET['id'];

$sql="UPDATE `clg` SET `firstname`='$firstname',`lastname`='$lastname',`fithername`='$fithername',`mobilenumber`='$mobilenumber',`address`='$address',`email`='$email',`password`='$password' WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){

    echo "data submited";
    echo "<script>location.href='show.php'</script>";

}
else{

    echo "error";
}

}


?>



</body>
</html>