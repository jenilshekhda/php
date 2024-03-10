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

    <span>emailid</span>
    <input type="emailid" class="form-control" name="emailid"> <br> <br>

    <span>password</span>
    <input type="password" class="form-control" name="password"> <br> <br>

    <button type="submit" name="submit">submit</button>
    </form>
 <?php
if(isset($_POST['submit'])){
  
    $emailid=$_POST['emailid'];
    $password=$_POST['password'];

  
 $sql="SELECT * FROM `filpkart` WHERE `emailid`='$emailid' and `password`='$password'";
 $result=mysqli_query($con,$sql);
 $num=mysqli_num_rows($result);
 
 if($num==1){
    echo"<script>alert('scuccess')</script>"; 
    echo"<script>location.href='welcome.php'</script>"; 
 }
 else{
    echo"<script>alert('error')</script>";
 }
}

 ?>   
</body>
</html>