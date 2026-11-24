<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$id = $_GET['h'];

$sql = "select *from `order` where id=$id";

$qry = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($qry)){

    $firstName = $row['firstName'];
    $middleName = $row['middleName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $phone = $row['phone'];
    $collection = $row['collection'];

    $saree_type = $row['saree_type'];
    $saree_name = $row['saree_name'];
    $saree_quantity = $row['saree_quantity'];

    $jewelry_type = $row['jewelry_type'];
    $jewelry_name = $row['jewelry_name'];
    $jewelry_quantity = $row['jewelry_quantity'];

    $cosmetic_type = $row['cosmetic_type'];
    $cosmetic_name = $row['cosmetic_name'];
    $shade = $row['shade'];
    $cosmetic_quantity = $row['cosmetic_quantity'];

    $product_name = $row['product_name'];
    $other_quantity = $row['other_quantity'];
    $product_description = $row['product_description'];

    $payment_method = $row['payment_method'];
    $cod_amount = $row['cod_amount'];
    $upi_amount = $row['upi_amount'];
    $upi_transaction_id = $row['upi_transaction_id'];
    $online_amount = $row['online_amount'];
    $online_transaction_id = $row['online_transaction_id'];

    $address = $row['address'];
    $pincode = $row['pincode'];
    $city = $row['city'];
    $state = $row['state'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="UME Collections">

    <meta name="author" content="UME Collections">

    <title>UME Collections - Edit Order</title>


    <!-- Bootstrap -->

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


    <!-- Font Awesome -->

    <link rel="stylesheet"
          href="assets/css/font-awesome.css">


    <!-- Klassy CSS -->

    <link rel="stylesheet"
          href="assets/css/templatemo-klassy-cafe.css">


    <link rel="stylesheet"
          href="assets/css/owl-carousel.css">


    <link rel="stylesheet"
          href="assets/css/lightbox.css">


    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">


    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .order-edit-container {
            width: 850px;
            max-width: 100%;
            margin: 120px auto 50px auto;
            padding: 0 20px;
        }

        .order-edit-header {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 35px 20px;
            border-radius: 15px 15px 0 0;
        }

        .order-edit-logo {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        .order-edit-header h1 {
            margin-top: 12px;
            font-size: 27px;
        }

        .order-edit-header p {
            margin-top: 7px;
            font-size: 14px;
        }

        .order-edit-content {
            background-color: white;
            padding: 35px;
            border-radius: 0 0 15px 15px;
        }


        .heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .heading h2 {
            color: #333;
            font-size: 25px;
        }

        .heading p {
            color: #888;
            margin-top: 8px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.06);
        }

        .card-title {
            text-align: center;
            color: #e91e63;
            font-size: 19px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .two-column {
            width: 100%;
            border-collapse: separate;
            border-spacing: 12px;
        }

        .two-column td {
            width: 50%;
            background-color: #fafafa;
            padding: 12px 18px;
            border-radius: 8px;
            vertical-align: top;
        }

        .field-title {
            color: #999;
            font-size: 11px;
            text-transform: uppercase;
            margin-bottom: 8px;
            font-weight: bold;
        }


        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 11px;
            border: 1px solid #dddddd;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            outline: none;
        }

        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #dddddd;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            outline: none;
            resize: vertical;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: #e91e63;
        }

        .submit-area {
            text-align: center;
            margin-top: 25px;
        }


        input[type="submit"] {
            background-color: #e91e63;
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 25px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }


        input[type="submit"]:hover {
            background-color: #c2185b;
        }

        .update-note {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .update-note p {
            color: #888;
            font-size: 14px;
        }

        footer {
        margin-top: 60px;
        padding: 50px 0px;
        background-color: #fb5849;
            width: 100% !important;
           
            clear: both;
            
        }

        footer .container {

            width: 100%;
           
        }

    </style>

</head>


<body>


 <!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="main-nav">


                    <!-- LOGO -->

                    <a href="index.php" class="logo">

                        <img src="../templatemo_558_klassy_cafe/images/ume.png"
                             alt="UME Collections">

                    </a>


                    <!-- MENU -->

                    <ul class="nav">

                       <li><a href="index.php">Home</a></li>
                        <li><a href="index.php">About Us</a> </li>
                        <li><a href="index.php">Clothing</a></li>
                        <li><a href="index.php">Jewels</a> </li>
                        <li><a href="index.php">Cosmetics</a> </li>
                        <li><a href="index.php">Contact Us</a> </li>
                        <li><a href="index.php">Register</a> </li>
                        <li><a href="index.php">Place Order</a></li>
                        <li><a href="index.php">Feedback</a></li>
                        <li><a href="index.php">Login</a></li>

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



<div class="order-edit-container">


    <div class="order-edit-header">

        <div class="order-edit-logo"> UME </div>
        <h1> Edit Order </h1>
        <p> Update your UME order details  </p>

    </div>


    <div class="order-edit-content">

        <div class="heading">

            <h2> Update Your Order </h2>
            <p> Modify the order details below and submit the form  </p>

        </div>


        <form action="orderupdate.php"id="update" method="post">

         <h2><?php echo $_SESSION['id'];?>

            <div class="card">

                <div class="card-title">

                    Customer Information </div>

                <table class="two-column">

                    <tr>
                        <td>
                            <div class="field-title">
                                First Name
                            </div>

                            <input type="text" name="firstName" value="<?php echo $firstName; ?>">

                        </td>


                        <td>

                            <div class="field-title">
                                Middle Name
                            </div>

                            <input type="text" name="middleName"  value="<?php echo $middleName; ?>">
                        </td>
                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Last Name

                            </div>

                            <input type="text"
                                   name="lastName"
                                   value="<?php echo $lastName; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Email

                            </div>

                            <input type="text"
                                   name="email"
                                   value="<?php echo $email; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Phone

                            </div>

                            <input type="text" name="phone" value="<?php echo $phone; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Collection

                            </div>

                            <input type="text" name="collection" value="<?php echo $collection; ?>">

                        </td>

                    </tr>

                </table>

            </div>

            <!-- SAREE -->

            <div class="card">

                <div class="card-title">

                    Saree Information

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Saree Type

                            </div>

                            <input type="text"
                                   name="saree_type"
                                   value="<?php echo $saree_type; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Saree Name

                            </div>

                            <input type="text"
                                   name="saree_name"
                                   value="<?php echo $saree_name; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Saree Quantity

                            </div>

                            <input type="number"  name="saree_quantity"  value="<?php echo $saree_quantity; ?>">

                        </td>

                        <td></td>

                    </tr>

                </table>

            </div>


            <!-- ================================================= -->
            <!-- JEWELRY -->
            <!-- ================================================= -->

            <div class="card">

                <div class="card-title">

                    Jewelry Information

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Jewelry Type

                            </div>

                            <input type="text"
                                   name="jewelry_type"
                                   value="<?php echo $jewelry_type; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Jewelry Name

                            </div>

                            <input type="text"
                                   name="jewelry_name"
                                   value="<?php echo $jewelry_name; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Jewelry Quantity

                            </div>

                            <input type="number"
                                   name="jewelry_quantity"
                                   value="<?php echo $jewelry_quantity; ?>">

                        </td>

                        <td></td>

                    </tr>

                </table>

            </div>


            <!-- ================================================= -->
            <!-- COSMETICS -->
            <!-- ================================================= -->

            <div class="card">

                <div class="card-title">

                    Cosmetics Information

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Cosmetic Type

                            </div>

                            <input type="text"
                                   name="cosmetic_type"
                                   value="<?php echo $cosmetic_type; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Cosmetic Name

                            </div>

                            <input type="text"
                                   name="cosmetic_name"
                                   value="<?php echo $cosmetic_name; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Shade

                            </div>

                            <input type="text"
                                   name="shade"
                                   value="<?php echo $shade; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Cosmetic Quantity

                            </div>

                            <input type="number"
                                   name="cosmetic_quantity"
                                   value="<?php echo $cosmetic_quantity; ?>">

                        </td>

                    </tr>

                </table>

            </div>


            <!-- ================================================= -->
            <!-- OTHER PRODUCT -->
            <!-- ================================================= -->

            <div class="card">

                <div class="card-title">

                    Other Product Information

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Product Name

                            </div>

                            <input type="text"
                                   name="product_name"
                                   value="<?php echo $product_name; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Other Quantity

                            </div>

                            <input type="number"
                                   name="other_quantity"
                                   value="<?php echo $other_quantity; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td colspan="2">

                            <div class="field-title">

                                Product Description

                            </div>

                            <textarea name="product_description"
                                      rows="4"><?php echo $product_description; ?></textarea>

                        </td>

                    </tr>

                </table>

            </div>


            <!-- ================================================= -->
            <!-- PAYMENT -->
            <!-- ================================================= -->

            <div class="card">

                <div class="card-title">

                    Payment Information

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Payment Method

                            </div>

                            <input type="text"
                                   name="payment_method"
                                   value="<?php echo $payment_method; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                COD Amount

                            </div>

                            <input type="text"
                                   name="cod_amount"
                                   value="<?php echo $cod_amount; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                UPI Amount

                            </div>

                            <input type="text"
                                   name="upi_amount"
                                   value="<?php echo $upi_amount; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                UPI Transaction ID

                            </div>

                            <input type="text"
                                   name="upi_transaction_id"
                                   value="<?php echo $upi_transaction_id; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                Online Amount

                            </div>

                            <input type="text"
                                   name="online_amount"
                                   value="<?php echo $online_amount; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Online Transaction ID

                            </div>

                            <input type="text"
                                   name="online_transaction_id"
                                   value="<?php echo $online_transaction_id; ?>">

                        </td>

                    </tr>

                </table>

            </div>


            <!-- ================================================= -->
            <!-- ADDRESS -->
            <!-- ================================================= -->

            <div class="card">

                <div class="card-title">

                    Delivery Address

                </div>


                <table class="two-column">

                    <tr>

                        <td>

                            <div class="field-title">

                                Address

                            </div>

                            <input type="text"
                                   name="address"
                                   value="<?php echo $address; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                Pincode

                            </div>

                            <input type="text"
                                   name="pincode"
                                   value="<?php echo $pincode; ?>">

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="field-title">

                                City

                            </div>

                            <input type="text"
                                   name="city"
                                   value="<?php echo $city; ?>">

                        </td>


                        <td>

                            <div class="field-title">

                                State

                            </div>

                            <input type="text"
                                   name="state"
                                   value="<?php echo $state; ?>">

                        </td>

                    </tr>

                </table>

            </div>


            <!-- HIDDEN ID -->

            <input type="hidden"
                   name="id"
                   value="<?php echo $id; ?>">


            <!-- SUBMIT -->

            <div class="submit-area">

                <input type="submit"
                       value="Update Order">

            </div>


        </form>


        <div class="update-note">

            <p>

                Update your order information carefully before submitting.

            </p>

        </div>

    </div>

</div>


<!-- ===================================================== -->
<!-- FOOTER -->
<!-- ===================================================== -->

<footer style="background:#ff5a50;  padding:45px 0; margin-top:60px;">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div style="display:flex; align-items:center; gap:18px;">
                  

                    <a href="#"
                       style="width:48px; height:48px; background:white;  border-radius:50%; display:flex;
                     align-items:center;  justify-content:center;  color:#ff5a50;  font-size:22px;  text-decoration:none;">

                        <i class="fa fa-facebook"></i>

                    </a>

                    <a href="#"
                        style="width:48px; height:48px; background:white;  border-radius:50%; display:flex;
                     align-items:center;  justify-content:center;  color:#ff5a50;  font-size:22px;  text-decoration:none;">

                        <i class="fa fa-instagram"></i>

                    </a>

                    <a href="#"
                        style="width:48px; height:48px; background:white;  border-radius:50%; display:flex;
                     align-items:center;  justify-content:center;  color:#ff5a50;  font-size:22px;  text-decoration:none;">

                        <i class="fa fa-twitter"></i>

                    </a>

                    <a href="#"
                         style="width:48px; height:48px; background:white;  border-radius:50%; display:flex;
                     align-items:center;  justify-content:center;  color:#ff5a50;  font-size:22px;  text-decoration:none;">

                        <i class="fa fa-envelope"></i>

                    </a>

                </div>

            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 text-center">

                <a href="index.php">
                    <img src="../templatemo_558_klassy_cafe/images/ume.png" alt="UME Collections" style="width:55px; height:55px; object-fit:cover;">
                </a>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 text-center">

                <p style="color:white; margin:0; font-size:15px; font-weight:500;">
                    © 2026 UME Collections.
                </p>


                <p style="color:white; margin:12px 0 0; font-size:15px; font-weight:500;">
                    Tradition • Elegance • Confidence
                </p>

            </div>

        </div>

    </div>

</footer>



<!-- ===================================================== -->
<!-- JAVASCRIPT -->
<!-- ===================================================== -->

<script src="../templatemo_558_klassy_cafe/assets/js/jquery-2.1.0.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/popper.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/bootstrap.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/scrollreveal.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/waypoints.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/jquery.counterup.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/imgfix.min.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/slick.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/lightbox.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/isotope.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/owl-carousel.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/accordions.js"></script>

<script src="../templatemo_558_klassy_cafe/assets/js/custom.js"></script>


</body>

</html>