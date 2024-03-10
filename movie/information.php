<?php

$servername="localhost";
$username="root";
$password="";
$databasename="movie";

$con=mysqli_connect($servername,$username,$password,$databasename);
 
if($con){

    echo "connection succesfully";

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
     
<span>moviename</span>
<input type="text" name="moviename" class="form-control">


<span>heroname</span>
<input type="text" name="heroname" class="form-control">


<span>baget</span>
<input type="number" name="baget" class="form-control">


<span>rating</span>
<span>1</span>
<input type="radio" name="rating"  value="1">
<span>2</span>
<input type="radio" name="rating" value="2">
<span>3</span>
<input type="radio" name="rating" value="3">
<span>4</span>
<input type="radio" name="rating"  value="4">
<span>5</span>
<input type="radio" name="rating"  value="5">

<button class="btn btn-dark text-light" name="movie">movie</button>

    </div>

    </div>


</form>
<?php
    

if(isset($_POST['movie'])){


$movie=$_POST['moviename'];
$hname=$_POST['heroname'];
$baget=$_POST['baget'];
$rating=$_POST['rating'];
$sql="INSERT INTO `INFORMATION`(`moviename`, `heroname`, `baget`, `rating`) VALUES ('$movie','$hname','$baget','$rating')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data submited";
}
else{
    echo "error";
}
}


?>

<a href="show.php"><button  class="btn btn-dark text-light">show</button></a>



</body>
</html>