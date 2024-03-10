<?php


$servername="localhost";
$username="root";
$password="";
$databasename="placement";

$con=mysqli_connect($servername,$username,$password,$databasename);

// if($con){

//     echo "connection successfully";
// }
// else{

//     echo "error";
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
    


<?php
$id=$_GET['id'];
$sql="SELECT * FROM `table3` WHERE `id`='$id'";


$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);


?>

    <form method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
   
                <span>firstname</span>
                <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']?>">
                    
                <span>lastname</span>
                <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']?>">
                
                    
                <span>mobilenumber</span>
                <input type="number" name="mobilenumber" class="form-control" value="<?php echo $row['mobilenumber']?>">
                
                    
                <span>email</span>
                <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>">
                
                    
                <span>password</span>
                <input type="password" name="password" class="form-control" value="<?php echo $row['password']?>">

                <button class="btn btn-success text-white" name="submit">submit</button>
            </div>
        </div>
    </div>
    </form>


<?php

if(isset($_POST['submit'])){

$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$mn=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=$_POST['password'];



$id=$_GET['id'];
$sql="UPDATE `table3` SET `firstname`='$fn',`lastname`='$ln',`mobilenumber`='$mn',`email`='$email',`password`='$password' WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data updated')<script>";
    echo "<script>location.href='show.php'<script>";

}
else{

    echo "<script>alert('error')<script>";
}

}

?>


</body>
</html>