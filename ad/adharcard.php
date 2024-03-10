

<a href="show1.php"><button>show page</button></a>

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
<body>
    
<form method="post">

<div class="col-md-6">

<div class="row">
 
<span>firstname</span>
<input type="text" class="form-control"  name="firstname">


<span>lastname</span>
<input type="text" class="form-control" name="lastname">


<span>adharid</span>
<input type="text" class="form-control" name="adharid">


<span>address</span>
<input type="text" class="form-control" name="address">

<span>mobilnumber</span>
<input type="number" class="form-control" name="mobilenumber">


<span>dob</span>
<input type="date" class="form-control" name="dob">


<button class="btn btn-dark" name="submit">submit</button>

</div>




</div>



</form>
<?php

if(isset($_POST['submit'])){

    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $adharid=$_POST['adharid'];
    $address=$_POST['address'];
    $mobilenumber=$_POST['mobilenumber'];
    $dob=$_POST['dob'];
    $sql="INSERT INTO `adharcardid`(`firstname`, `lastname`, `adharid`, `address`, `mobilenumber`, `dob`) VALUES ('$fn','$ln','$adharid','$address','$mobilenumber','$dob')";
    $result=mysqli_query($con,$sql);
    if($result)
{
    echo "data submited";
}

else{

    echo "error";
}
}

?>


</body>
</html>