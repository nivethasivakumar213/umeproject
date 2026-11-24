<?php

session_start();
$id=$_GET['id'];
$conn = mysqli_connect("localhost", "root", "", "ume");
$clothsql = "select * from product where category='Saree' and id=$id";
$clothqry = mysqli_query($conn, $clothsql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UME Collections">
    <meta name="author" content="UME Collections">
    <title>UME Collections -  Sarees</title>


    <!-- Bootstrap -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <!-- UME PROJECT CSS -->

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/font-awesome.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/owl-carousel.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/lightbox.css">


    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">


<style>

.product-page {

    padding: 60px 0;

}


.main-product {

    background: white;

    padding: 30px;

    border-radius: 10px;

    box-shadow: 0 3px 15px rgba(0,0,0,0.10);

    margin-bottom: 70px;

}


.main-product-image {

    width: 100%;

    height: 550px;

    object-fit: contain;

    border-radius: 8px;

    background: #fff;

}


.product-details {

    padding: 30px;

}


.product-title {

    font-size: 35px;

    font-weight: 600;

    margin-bottom: 15px;

}


.product-price {

    font-size: 28px;

    font-weight: bold;

    color: #ff5a50;

    margin-bottom: 20px;

}


.product-description {

    font-size: 16px;

    line-height: 1.8;

    color: #666;

}


.product-info {

    margin-top: 25px;

}


.product-info p {

    margin-bottom: 10px;

}


.order-button {

    display: inline-block;

    margin-top: 20px;

    padding: 13px 30px;

    background: #ff5a50;

    color: white;

    text-decoration: none;

    border-radius: 4px;

}


.order-button:hover {

    color: white;

    text-decoration: none;

    background: #e94d45;

}



.other-title {

    text-align: center;

    margin-bottom: 35px;

}


.other-title h2 {

    font-size: 30px;

    font-weight: 600;

}


.other-title p {

    color: #777;

}


.saree-card {

    background: white;

    border-radius: 10px;

    overflow: hidden;

    margin-bottom: 30px;

    box-shadow: 0 3px 15px rgba(0,0,0,0.10);

    transition: 0.3s;

}


.saree-card:hover {

    transform: translateY(-6px);

    box-shadow: 0 8px 25px rgba(0,0,0,0.15);

}


.saree-card img {

    width: 100%;

    height: 280px;

    object-fit: cover;

}


.saree-card-content {

    padding: 20px;

}


.saree-card-content h4 {

    font-size: 21px;

    font-weight: 600;

    margin-bottom: 10px;

}


.saree-card-content .price {

    color: #ff5a50;

    font-size: 20px;

    font-weight: bold;

    margin-bottom: 10px;

}


.saree-card-content p {

    color: #777;

    font-size: 14px;

    line-height: 1.6;

}


.view-button {

    display: inline-block;

    background: #ff5a50;

    color: white;

    padding: 9px 18px;

    border-radius: 4px;

    text-decoration: none;

    margin-top: 8px;

}


.view-button:hover {

    color: white;

    text-decoration: none;

    background: #e94d45;

}


</style>

</head>


<body>


<header class="header-area header-sticky">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="main-nav">


                    <a href="index.php"
                       class="logo">

                        <img
                            src="../templatemo_558_klassy_cafe/images/ume.png"
                            alt="UME Collections">

                    </a>

                    <ul class="nav">

                        <li>
                            <a href="index.php">Home</a>
                        </li>

                        <li>
                            <a href="index.php">About Us</a>
                        </li>

                        <li>
                            <a href="index.php">Clothing</a>
                        </li>

                        <li>
                            <a href="index.php">Jewels</a>
                        </li>

                        <li>
                            <a href="index.php">Cosmetics</a>
                        </li>

                        <li>
                            <a href="index.php">Contact Us</a>
                        </li>

                        <li>
                            <a href="index.php">Register</a>
                        </li>

                        <li>
                            <a href="index.php">Place Order</a>
                        </li>

                        <li>
                            <a href="index.php">Feedback</a>
                        </li>

                        <li>
                            <a href="index.php">Login</a>
                        </li>

                    </ul>


                    <!-- MOBILE MENU -->

                    <a class="menu-trigger">

                        <span>Menu</span>

                    </a>

                </nav>

            </div>

        </div>

    </div>

</header>


<br>
<br>


<div class="container product-page">

<?php
while($clothrow=mysqli_fetch_assoc($clothqry))
      {
            $id=$clothrow['id'];
            $clothcat=$clothrow['category'];
            $clothbrandname=$clothrow['brand'];   
            $clothtype=$clothrow['type'];
            $clothprice=$clothrow['price'];
            $clothdescription=$clothrow['description'];
            $clothimg=$clothrow['file'];
            $clothcollection=$clothrow['collection'];
            $clothocc =$clothrow['occasion']; 
            $clothavail=$clothrow['availability'];
                      
 ?>

<div class="main-product">

<div class="row">

<div class="col-lg-6 col-md-6">

    <img
        src='admin/<?php echo $clothimg;?>'
        class="main-product-image"
        alt="Silk Sarees">

</div>

<div class="col-lg-6 col-md-6">

    <div class="product-details">


        <h1 class="product-title">

           <?php echo $clothcat;?>

        </h1>


        <div class="product-price">

            ₹<?php echo $clothprice;?>

        </div>


        <p class="product-description">

           <?php echo $clothdescription;?>

        </p>


        <div class="product-info">

            <p>

                <strong>Collection:</strong>

                <?php echo $clothcollection;?>

            </p>

            <p>

                <strong>Type:</strong>

                <?php echo $clothtype;?>

            </p>


            <p>

                <strong>Occasion:</strong>

                <?php echo $clothocc;?>

            </p>


            <p>

                <strong>Brand:</strong>

                <?php echo $clothbrandname;?>

            </p>


            <p>

                <strong>Availability:</strong>

                <span style="color:#28a745;">
                    <?php echo $clothavail;?>
                </span>

            </p>


        </div>


        <a href="index.php"
           class="order-button">

            <i class="fa fa-shopping-cart"></i>

            Place Order

        </a>


    </div>

</div>


</div>

<?php }
?>

</div>


</div>


<footer style=" background:#ff5a50; padding:45px 0; margin-top:60px;">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-4 col-md-4 col-sm-12">

<div style=" display:flex; align-items:center; gap:18px;">

<a href="#" style=" width:48px; height:48px; background:white; border-radius:50%;
display:flex; align-items:center;
justify-content:center; color:#ff5a50; font-size:22px; text-decoration:none; ">

<i class="fa fa-facebook"></i>

</a>

<a href="#" style=" width:48px; height:48px; background:white; border-radius:50%;
display:flex; align-items:center; justify-content:center; color:#ff5a50;
font-size:22px; text-decoration:none; ">

<i class="fa fa-instagram"></i>

</a>


<a href="#" style=" width:48px; height:48px; background:white;
border-radius:50%; display:flex; align-items:center; justify-content:center;
color:#ff5a50; font-size:22px; text-decoration:none;">

<i class="fa fa-twitter"></i>

</a>

<a href="#" style=" width:48px; height:48px; background:white;
border-radius:50%; display:flex; align-items:center; justify-content:center;
color:#ff5a50; font-size:22px; text-decoration:none; ">

<i class="fa fa-envelope"></i>

</a>

</div>

</div>

<div class="col-lg-4 col-md-4 col-sm-12 text-center">


<a href="index.php">

<img
src="../templatemo_558_klassy_cafe/images/ume.png"
alt="UME Collections"
style=" width:55px; height:55px; object-fit:cover; ">

</a>


</div>

<div class="col-lg-4 col-md-4 col-sm-12 text-center">


<p style="color:white;margin:0;
font-size:15px; font-weight:500;">

© 2026 UME Collections.

</p>

<p style="color:white; margin:12px 0 0;
font-size:15px; font-weight:500;">

Tradition • Elegance • Confidence

</p>


</div>


</div>

</div>

</footer>


</body>

</html>
