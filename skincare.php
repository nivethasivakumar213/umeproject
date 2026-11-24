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

    <title>Earrings - UME Collections</title>

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


    <!-- MAIN PRODUCT -->

    <div class="main-product">


        <div class="row">


            <div class="col-lg-6 col-md-6">


                <img
                    src="../templatemo_558_klassy_cafe/images/c4.jpg"
                    class="main-product-image"
                    alt="Skincare">


            </div>



            <div class="col-lg-6 col-md-6">


                <div class="product-details">


                    <h1 class="product-title">

                        Skincare

                    </h1>


                    <div class="product-price">

                        ₹3500

                    </div>


                    <p class="product-description">

                        Gentle skincare essentials designed
                        to nourish, hydrate and maintain a
                        fresh and healthy glow.

                    </p>


                    <div class="product-info">


                        <p>

                            <strong>Collection:</strong>

                            Cosmetics

                        </p>


                        <p>

                            <strong>Type:</strong>

                            Skincare

                        </p>


                        <p>

                            <strong>Occasion:</strong>

                            Daily Care

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

                    <a href="index.php"
                       class="order-button">

                        <i class="fa fa-shopping-cart"></i>

                        Place Order

                    </a>


                </div>

            </div>


        </div>

</div>



    <section class="section">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 offset-lg-4 text-center">

                    <div class="section-heading">

                        <h6>UME Collections</h6>

                        <h2>Beauty Collections</h2>

                    </div>

                </div>

            </div>



            <div class="row">

            <div class="col-lg-4 col-md-6">

                    <div class="chef-item related-card">

                        <div class="thumb">

                            <a href="makeup.php">

                                <img
                                    src="../templatemo_558_klassy_cafe/images/c3.jpg"
                                    class="related-image"
                                    alt="Makeup Essentials" height="250" width="300">

                            </a>

                        </div>


                        <div class="down-content text-center">

                            <a href="makeup.php">

                                <h4>Makeup Essentials</h4>

                            </a>

                            <span>

                                Enhance Your Natural Beauty

                            </span>


                        </div>


                    </div>


                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="chef-item related-card">

                        <div class="thumb">

                            <a href="skincare.php">

                                <img
                                    src="../templatemo_558_klassy_cafe/images/c4.jpg"
                                    class="related-image"
                                    alt="Skincare" height="250" width="300">

                            </a>

                        </div>

                        <div class="down-content text-center">

                            <a href="skincare.php">

                                <h4>Skincare</h4>

                            </a>

                            <span>

                                Fresh Healthy Glow

                            </span>


                        </div>


                    </div>


                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="chef-item related-card">

                        <div class="thumb">

                            <a href="haircare.php">

                                <img
                                    src="../templatemo_558_klassy_cafe/images/c1.jpg"
                                    class="related-image"
                                    alt="Haircare" height="250" width="300">

                            </a>

                        </div>

                        <div class="down-content text-center">

                            <a href="haircare.php">

                                <h4>Haircare</h4>

                            </a>

                            <span>

                                Beautiful Healthy Hair

                            </span>


                        </div>


                    </div>


                </div>


            </div>


        </div>


    </section>


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
