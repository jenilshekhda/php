<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="filpkart";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"<script>alert('scuccess')</script>";
}
else{
    echo"<script>alert('error')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">
    
         <span>fullname</span>
         <input type="text" class="form-control" name="fullname"> <br><br>

         <span>address</span>
         <input type="text" class="form-control" name="address"> <br><br>

         <span>email</span>
         <input type="email" class="form-control" name="email"> <br><br>

         <span>password</span>
         <input type="password" class="form-control" name="password"> <br><br>

         <button type="submit" name="submit">submit</button>


         

    </form>
    
</body>
</html>
<?php
  
  if(isset($_POST['submit'])){

  $f1=$_POST['fullname'];
  $f2=$_POST['address'];
  $f3=$_POST['email'];
  $f4=$_POST['password'];

  
  
  $sql="INSERT INTO `filpkart`(`fullname`, `address`, `emailid`, `password`) VALUES ('$f1','$f2','$f3','$f4')";
  $result=mysqli_query($con,$sql);
  
  if($result){
    echo"<script>alert('scuccess')</script>";
    echo"<script>location.href='insert.php'</script>";
  }
  else{
    echo"<script>alert('error')</script>";
  }
}
  
         ?>

