<?php
$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";

$con=mysqli_connect($servername,$username,$password,$databasename);


// if($con){
//     echo "conection sucessfully";
// }
// else{

//     echo "error";
// }
// 

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

<span>full name</span>
<input type="text" placeholder=" full name" class="form-control" name="firstname">


<span>last name</span>
<input type="text" placeholder="last name" class="form-control" name="lastname">


<span>mobilenumber</span>
<input type="number" class="form-control" name="mobilenumber">


<span>emailid</span>
<input type="email" placeholder="emailid" class="form-control" name="emailid">


<span>password</span>
<input type="password" class="form-control" name="password">


<button class="col-md-3 btn btn-dark" name="submit">submit</button>

</form>



</div>

</div>

</body>
</html>