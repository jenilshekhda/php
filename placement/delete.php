<?php


$servername="localhost";
$username="root";
$password="";
$databasename="placement";

$con=mysqli_connect($servername,$username,$password,$databasename);
$id=$_GET['id'];

$sql="DELETE FROM `table3` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);

if($result){

    echo "<script>alert('data deleted')<script>";
    echo "<script>location.href='show.php'<script>";
}
else{

 
    echo "<script>alert('error')<script>";
}
?>
