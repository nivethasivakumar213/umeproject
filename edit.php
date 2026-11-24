<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$id = $_GET['h'];

$sql = "SELECT * FROM reg WHERE id=$id";

$qry = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($qry)) {

    $firstName = $row['firstName'];
    $middleName = $row['middleName'];
    $lastName = $row['lastName'];
    $email = $row['email'];
    $phone = $row['phone'];
    $dob = $row['dob'];
    $source = $row['source'];
    $address = $row['address'];
    $pincode = $row['pincode'];
    $city = $row['city'];
    $state = $row['state'];
    $username = $row['username'];
    $password = $row['password'];
    $confirmPassword = $row['confirmPassword'];
    $referral = $row['referral'];
    $message = $row['message'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="UME Collections">

    <meta name="author" content="UME Collections">

    <title>UME Collections - Edit Registration</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- Klassy CSS -->

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        .edit-container {
            width: 850px;
            max-width: 95%;
            margin: 120px auto 50px auto;
        }

        .edit-header {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 35px 20px;
            border-radius: 15px 15px 0 0;
        }

        .edit-logo {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        .edit-header h1 {
            margin-top: 12px;
            font-size: 27px;
        }

        .edit-header p {
            margin-top: 7px;
            font-size: 14px;
        }

        .edit-content {
            background-color: white;
            padding: 35px;
            border-radius: 0 0 15px 15px;
        }

        .edit-heading {
            text-align: center;
            margin-bottom: 30px;
        }

        .edit-heading h2 {
            color: #333;
            font-size: 25px;
        }

        .edit-heading p {
            color: #888;
            margin-top: 8px;
        }

        .edit-card {
            background-color: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 12px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.06);
        }

        .edit-card-title {
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
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 11px;
            border: 1px solid #dddddd;
            border-radius: 6px;
            background-color: white;
            font-size: 14px;
            color: #333;
            outline: none;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {

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

        .edit-footer-text {
            text-align: center;
            margin-top: 20px;
        }

        .edit-footer-text p {
            color: #888;
            font-size: 14px;
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

                    <a href="index.html" class="logo">

                        <img src="../templatemo_558_klassy_cafe/images/ume.png"
                             alt="UME Collections">

                    </a>

                    <ul class="nav">

                       <li><a href="index.html">Home</a></li>
                        <li><a href="index.html">About Us</a> </li>
                        <li><a href="index.html">Clothing</a></li>
                        <li><a href="index.html">Jewels</a> </li>
                        <li><a href="index.html">Cosmetics</a> </li>
                        <li><a href="index.html">Contact Us</a> </li>
                        <li><a href="index.html">Register</a> </li>
                        <li><a href="index.html">Place Order</a></li>
                        <li><a href="index.html">Feedback</a></li>
                        <li><a href="index.html">Login</a></li>

                    </ul>

                    <a class="menu-trigger">

                        <span>Menu</span>

                    </a>

                </nav>

            </div>

        </div>

    </div>

</header>


    <!-- ***** Header Area End ***** -->

<div class="edit-container">

    <div class="edit-header">
        <div class="edit-logo">  UME</div>
        <h1> Edit Registration </h1>
        <p> Update your UME registration details </p>
    </div>

    <div class="edit-content">
        <div class="edit-heading">
            <h2> Update Your Information  </h2>
            <p>  Modify the details below and submit the form </p>
        </div>

        <form action="update.php" id="update" method="post" enctype="multipart/form-data">

        <h2><?php echo $_SESSION['id'];?>
        
            <div class="edit-card">
                <div class="edit-card-title">
                      Personal Information </div>

                <table class="two-column">
                    <tr>
                        <td>
                            <div class="field-title">  First Name </div>
                            <input type="text" name="firstName" value="<?php echo $firstName; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Middle Name  </div>
                            <input type="text" name="middleName" value="<?php echo $middleName; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="field-title"> Last Name </div>
                            <input type="text" name="lastName" value="<?php echo $lastName; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Date of Birth </div>
                            <input type="text" name="dob" value="<?php echo $dob; ?>">
                        </td>
                    </tr>

                    <tr>

                        <td>
                            <div class="field-title"> Phone </div>
                            <input type="text" name="phone" value="<?php echo $phone; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Email </div>
                            <input type="email" name="email" value="<?php echo $email; ?>">
                        </td>

                    </tr>
                </table>
            </div>

            <div class="edit-card">

                <div class="edit-card-title">
                    Contact Information </div>

                <table class="two-column">

                    <tr>
                        <td>
                            <div class="field-title"> Address </div>
                            <input type="text" name="address" value="<?php echo $address; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Pincode </div>
                            <input type="text" name="pincode" value="<?php echo $pincode; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="field-title"> City </div>
                            <input type="text" name="city" value="<?php echo $city; ?>">
                        </td>

                        <td>
                            <div class="field-title"> State</div>
                            <input type="text" name="state" value="<?php echo $state; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="field-title"> Source </div>
                            <input type="text" name="source" value="<?php echo $source; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Referral </div>
                            <input type="text" name="referral" value="<?php echo $referral; ?>">
                        </td>
                    </tr>

                </table>
            </div>

            <div class="edit-card">

                <div class="edit-card-title">
                    Account Information </div>

                <table class="two-column">
                    <tr>
                        <td>
                            <div class="field-title"> Username </div>
                            <input type="text" name="username" value="<?php echo $username; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Password  </div>
                            <input type="password" name="password" value="<?php echo $password; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="field-title">  Confirm Password </div>
                            <input type="password" name="confirmPassword" value="<?php echo $confirmPassword; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Message </div>
                            <input type="text" name="message"  value="<?php echo $message; ?>">
                        </td>
                    </tr>

                </table>
            </div>

            <input type="hidden" name="id"  value="<?php echo $id; ?>">

            <div class="submit-area">
                <input type="submit" value="Update Registration">
            </div>

        </form>

        <div class="edit-footer-text">
            <p> Update your information carefully before submitting. </p>
        </div>

    </div>

</div>

<!-- FOOTER -->

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

                <a href="index.html">
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

<!-- JAVASCRIPT -->

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