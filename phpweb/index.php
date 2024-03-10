
<?php

include 'admin/conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm  navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/img01.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item ">
                <a class="nav-link text-dark" href="#">EVERYTHING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark" href="#">WOMEN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-dark" href="#">MEN</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">ACCESSORIES</a>
              </li>
            </ul>

            <div class="col-md-4"></div>


            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link  text-dark" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="#">CONTACT US</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">$0.00</a>
            </li>

              <li class="nav-item">
                <a class="nav-link  text-dark" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"
                    style="font-size:20px;"></i></a>
              </li>

              <li class="nav-item">
                <a class="nav-link  text-dark" href="#"><i class="fa fa-user" aria-hidden="true" style="font-size:25px;"></i></a>
              </li>



            </ul>
          </div>
        </div>
      </nav>

<div class="container">
<div class="row">

    <p>Home / Women</p>
<p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit sed ut.</p>



<?php



$sql="SELECT * FROM `website` WHERE 1";

$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

                ?>




<div class="col-md-4">
<img src="product/<?php  echo $row['img'] ?>" alt="" style="height:250px;width:250px">
<p><?php  echo $row['p_name'] ?></p>
<p><?php  echo $row['p_categories'] ?></p>
<p>$<del><?php  echo $row['del_price'] ?></del>.00 – $<?php  echo $row['price'] ?>.00
</p>
</div>





<?php
}
?>


    </div>
</div>










</body>
</html>