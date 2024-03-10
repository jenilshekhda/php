<?php


$server="localhost";
$user="root";
$psd="";
$db="student";

$con=mysqli_connect($server,$user,$psd,$db);

// if($con){
//     echo "<script>alert('success')</script>";

// }

// else{
//     echo "<script>alert('erroorrororoor')</script>";

// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<div class="container mt-3">
  <h2>Insert  form</h2>

<?php
$id=$_GET['id'];
$sql="SELECT `id`, `sname`, `scourse`, `pr`, `fees` FROM `data` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

?>


  <form method="post">
    <div class="mb-3 mt-3">
      <label for="email">Student Name</label>
      <input type="text" class="form-control" id="email" name="sname" value="<?php echo $row['sname'] ?>">
    </div>
    <div class="mb-3">
      <label for="pwd">Student Course:</label>
      <input type="text" class="form-control" id="pwd"  name="scourse" value="<?php echo $row['scourse'] ?>">
    </div>
    <div class="mb-3">

      <label for="pwd">Student Pr:</label>
      <input type="number" class="form-control" id="pwd"  name="pr" value="<?php echo $row['pr'] ?>">
    </div>
    <div class="mb-3">

      <label for="pwd">Student Fees:</label>
      <input type="number" class="form-control" id="pwd"  name="fees" value="<?php echo $row['fees'] ?>">
    </div>
  
    <button type="submit" class="btn btn-primary" name="sub">Submit</button>
  </form>
</div>



<?php

if(isset($_POST['sub'])){

$sn=$_POST['sname'];
$sc=$_POST['scourse'];
$pr=$_POST['pr'];
$fees=$_POST['fees'];
$id=$_GET['id'];

$sql="UPDATE `data` SET `sname`='$sn',`scourse`='$sc',`pr`='$pr',`fees`='$fees' WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data update')</script>";
    echo "<script>location.href='show.php'</script>";
}

else{
    echo "<script>alert('errororororoor')</script>";
    echo "<script>location.href='show.php'</script>";
}


}

?>
