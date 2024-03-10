<?php
$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";

$con=mysqli_connect($servername,$username,$password,$databasename);


if($con){
    echo "conection sucessfully";
}
else{

    echo "error";
}


?>