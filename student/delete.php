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

$id=$_GET['id'];
$sql="DELETE FROM `data` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='show.php'</script>";

}

else{
    echo "<script>alert('erroorrororoor')</script>";

}


?>


