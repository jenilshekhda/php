<?php


include 'conn.php';

$id=$_GET['id'];
$sql="DELETE FROM `website` WHERE `id`='$id'";


$result=mysqli_query($con,$sql);


if($result){

    echo "<script>alert('product delete succes')</script>";
    echo "<script>location.href='showproduct.php'</script>";
}
else{

    echo "error";
}





?>