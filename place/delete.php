
<?php
$servername="localhost";
$username="root";
$password="";
$databasename="tours";

$con=mysqli_connect($servername,$username,$password,$databasename);

// if($con){

//     echo "<script>alert('conection succesfully')</script>";
// }
// else{
//     echo "<script>alert('error')</script>";
// }

$id=$_GET['id'];

$sql="DELETE FROM `place` WHERE `id`='$id'";


$result=mysqli_query($con,$sql);


if($result){

    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='show.php'</script>";

}
else{
    echo "<script>alert('error')</script>";
}


?>