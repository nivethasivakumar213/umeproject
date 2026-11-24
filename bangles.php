<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

if (!$conn) {
    die("Database connection failed");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Bangles - UME Collections</title>

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/font-awesome.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/templatemo-klassy-cafe.css">

    <style>

        .product-page {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .main-product {
            background: #fff;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.08);
        }

        .main-product-image {
            width: 100%;
            max-height: 550px;
            object-fit: cover;
        }

        .product-details {
            padding: 30px;
        }

        .product-title {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-description {
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .product-info p {
            font-size: 16px;
            margin-bottom: 12px;
        }

        .order-button {
            display: inline-block;
            padding: 12px 25px;
            background: #fb5849;
            color: white;
            text-decoration: none;
            margin-top: 20px;
        }

        .order-button:hover {
            color: white;
        }

</style>

</head>

<body>

<header class="header-area header-sticky">

<div class="container">
<div class="row">
<div class="col-12">

<nav class="main-nav">

<a href="index.php" class="logo">
<img src="../templatemo_558_klassy_cafe/images/ume.png">
</a>

<ul class="nav">
<li><a href="index.php">Home</a></li>
<li><a href="index.php">About Us</a></li>
<li><a href="index.php">Clothing</a></li>
<li><a href="index.php">Jewels</a></li>
<li><a href="index.php">Cosmetics</a></li>
<li><a href="index.php">Contact Us</a></li>
<li><a href="index.php">Register</a></li>
<li><a href="index.php">Place Order</a></li>
<li><a href="index.php">Feedback</a></li>
<li><a href="index.php">Login</a></li>
</ul>

<a class="menu-trigger"><span>Menu</span></a>

</nav>

</div>
</div>
</div>

</header>

<div class="container product-page">


    <div class="main-product">


        <div class="row">


            <div class="col-lg-6 col-md-6">


                <img
                    src="../templatemo_558_klassy_cafe/images/jb.jfif"
                    class="main-product-image"
                    alt="Bangles">


            </div>



            <div class="col-lg-6 col-md-6">


                <div class="product-details">


                    <h1 class="product-title">

                        Bangles

                    </h1>


                    <div class="product-price">

                        ₹15000

                    </div>


                    <p class="product-description">

                        Classic bangles designed with elegant
                        details to add timeless charm and
                        traditional beauty to your look.

                    </p>


                    <div class="product-info">


                        <p>

                            <strong>Collection:</strong>

                            Jewelry

                        </p>


                        <p>

                            <strong>Type:</strong>

                            Bangles

                        </p>


                        <p>

                            <strong>Occasion:</strong>

                            Wedding & Celebration

                        </p>


                        <p>

                            <strong>Brand:</strong>

                            UME Collections

                        </p>


                        <p>

                            <strong>Availability:</strong>

                            <span style="color:#28a745;">

                                In Stock

                            </span>

                        </p>


                    </div>


                    <a href="order.php"
                       class="order-button">

                        <i class="fa fa-shopping-cart"></i>

                        Place Order

                    </a>


                </div>


            </div>


        </div>


    </div>


</div>

<!-- ***** Related Jewelry Starts ***** -->

<section class="section" id="related-jewelry">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 offset-lg-4 text-center">

                <div class="section-heading">

                    <h6>UME Collections</h6>

                    <h2>Related Jewelry</h2>

                </div>

            </div>

        </div>


        <div class="row">


            <!-- Necklaces -->

              <div class="col-lg-4 col-md-6">

                <div class="chef-item">

                    <div class="thumb">

                        <a href="necklace.php">

                            <img
                                src="../templatemo_558_klassy_cafe/images/j2.jfif"
                                alt="Necklaces" height="350" width="350">

                        </a>

                    </div>


                    <div class="down-content text-center">

                        <a href="necklace.php">

                            <h4>Necklaces</h4>

                        </a>

                        <span>Sparkling Elegance</span>

                    </div>

                </div>

            </div>



            <!-- Earrings -->

              <div class="col-lg-4 col-md-6">

                <div class="chef-item">

                    <div class="thumb">

                        <a href="earrings.php">

                            <img
                                src="../templatemo_558_klassy_cafe/images/je.jfif"
                                alt="Earrings" height="350" width="350">

                        </a>

                    </div>


                    <div class="down-content text-center">

                        <a href="earrings.php">

                            <h4>Earrings</h4>

                        </a>

                        <span>Subtle Sparkle</span>

                    </div>

                </div>

            </div>


            <!-- Bangles -->

            <div class="col-lg-4 col-md-6">

                <div class="chef-item">

                    <div class="thumb">

                        <a href="bangles.php">

                            <img
                                src="../templatemo_558_klassy_cafe/images/jb.jfif"
                                alt="Bangles" height="350" width="350">

                        </a>

                    </div>


                    <div class="down-content text-center">

                        <a href="bangles.php">

                            <h4>Bangles</h4>

                        </a>

                        <span>Classic Charm</span>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>

<!-- ***** Related Jewelry Ends ***** -->

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
