
<?php
$servername="localhost";
$username="root";
$password="";
$datbasname="movie";

$con=mysqli_connect($servername,$username,$password,$datbasname);

if($con){
    echo"contection sucessfull";
}
else{
 echo"error";
}

$id=$_GET['id'];

$sql="DELETE FROM `movie information` WHERE `id`='$id'";

$result=mysqli_query($con,$sql);
if($result){
    echo "<script>alert('data delete')</script>";
    echo "<script> location.href='show.php'</script>";

}
?>
