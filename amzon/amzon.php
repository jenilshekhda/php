

<a href="show.php">
<button class="btn btn-dark text-white">show</button></a>

<?php

$servername="localhost";
$username="root";
$password="";
$databasename="amzon";

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
    
<form method="post" enctype="multipart/form-data">

    <div class="col-md-6">
<div class="row">

<span>pname</span>
<input type="text" name="pname" class="form-control">

    
<span>pprice</span>
<input type="text" name="pprice" class="form-control">
    
<span>pphoto</span>
<input type="file" name="pphoto" class="form-control">

<button class="btn btn-dark text-white" name="submit">submit</button>

</div>

    </div>
</form>

<?php

if(isset($_POST['submit'])){

    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];
    $pphoto=$_FILES['pphoto']['name'];
    $sql="INSERT INTO `product`(`pname`, `pprice`, `pphoto`) VALUES ('$pname','$pprice','$pphoto')";
    $result=mysqli_query($con,$sql);

    if($result){

        echo "data submited";
    }

   else{

echo "error";

   } 

   $target="img/";
   $fname=$target.basename($_FILES['pphoto']['name']);
$move=move_uploaded_file($_FILES['pphoto']['tmp_name'],$fname);
}


?>







</body>
</html>