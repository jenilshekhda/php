
<?php

$servername="localhost";
$username="root";
$password="";
$databasename="jenilphp";

$con=mysqli_connect($serername,$username,$password,$databasename);

if($con){
    
    echo "conection succesfully";
}
else{
    echo "error";
}

?>



