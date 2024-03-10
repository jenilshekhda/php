<?php
$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";

$con=mysqli_connect($servername,$username,$password,$databasename);

if($con){

    echo "connection succesfully";
}

else{

    echo "error";
}
$id=$_GET['id'];

$sql="DELETE FROM `driving` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='show.php'</script>";
}
else{
    echo "error";
}


?>