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
    
    
<span>standard</span>
<input type="text" class="form-control" name="std"> 

 
<span>rollnumber</span>
<input type="number" class="form-control" name="rollno">

 
<span>fees</span>
<input type="numbrt" class="form-control" name="fees">

 
<span>gender</span>
<input type="radio"  name="gender" value="male">
<input type="radio"  name="gender" value="female">


<span>s_name</span>
<input type="numbrt" class="form-control" name="sname">


<span>joining_date</span>
<input type="date" class="form-control" name="joiningdate">
<button class="btn btn-dark" name="submit">submit</button>
 
 

</div>


</div>st



    </form>

<?php

if(isset($_POST['submit'])){

    $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $std=$_POST['std'];
    $rolln=$_POST['rollno'];
    $fees=$_POST['fees'];
    $gender=$_POST['gender'];
$sname=$_POST['sname'];
$join=$_POST['joiningdate'];
$sql="INSERT INTO `studentmangment`( `firstname`, `lastname`, `standard`, `rollnumber`, `fees`, `gender`, `s_name`, `joining_date`) VALUES ('$fn','$ln','$std','$rolln','$fees','$gender','$sname','$join')";

$result=mysqli_query($con,$sql);

if($result)
{
echo "data sumbmited";
}
else{
    echo "error";
}



}
 
$sql="SELECT * FROM `studentmangment` WHERE 1";

$result=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($result))
{
echo $row['id'];

echo $row['firstname'];
echo $row['lastname'];
echo $row['standard'];
echo $row['rollnumber'];
echo $row['fees'];
echo $row['gender'];
echo $row['s_name'];
echo $row['joining_date'];

echo "<br>";



}




?>


</body>
</html>