<a href="show.php"><button>showpage</button></a>

<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="movie";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"contection sucessfull";
}
else{
 echo"error";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
    <form method="post">
        <span>movie name</span>
        <input type="text" control="form-control" name="moviename"> <br><br>
        <span>hero name</span>
        <input type="text" control="form-control" name="heroname"> <br><br>
        <span>heroine name</span>
        <input type="text" control="form-control" name="heroinename"> <br><br>
        <span>buget</span>
        <input type="text" control="form-control" name="buget"> <br><br>
        <span>rating</span> 
        <span>1</span>
        <input type="radio"  name="rating" value="1">
        <span>2</span>
        <input type="radio"  name="rating" value="2">
         <span>3</span>
        <input type="radio"  name="rating"value="3">
        <span>4</span>
        <input type="radio"  name="rating" value="4">
        <span>5</span>
        <input type="radio"  name="rating" value="5">
        <br><br>
          <button name="btn" class="col-md-2">submit</button>

    </form>

   
</body>
</html>

<?php
    if(isset($_POST['btn'])){
    $f1=$_POST['moviename'];
    $f2=$_POST['heroname'];
    $f3=$_POST['heroinename'];
    $f4=$_POST['buget'];
    $f5=$_POST['rating'];



    
    $sql="INSERT INTO `movie information`(`moviename`, `heroename`, `heroinename`, `buget`, `rating`) VALUES ('$f1','$f2','$f3','$f4','$f5')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo"contection sucessfull";
  }
  else{
    echo"error";
  }

}
?>