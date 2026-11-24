<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$id = $_GET['h'];

$sql = "select * from `feedback` WHERE id=$id";

$qry = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($qry)){

    $yourname = $row['yourname'];
    $email = $row['email'];
    $phonenumber = $row['phonenumber'];
    $collection = $row['collection'];
    $rating = $row['rating'];
    $feedback = $row['feedback'];
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

    <title>UME Collections - Edit Feedback</title>


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

        .feedback-edit-container {
            width: 850px;
            max-width: 100%;
            margin: 120px auto 50px auto;
            padding: 0 20px;

        }

        .feedback-edit-header {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 35px 20px;
            border-radius: 15px 15px 0 0;
        }

        .feedback-edit-logo {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        .feedback-edit-header h1 {
            margin-top: 12px;
            font-size: 27px;
        }

        .feedback-edit-header p {
            margin-top: 7px;
            font-size: 14px;
        }

        .feedback-edit-content {
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

        input[type="text"] {
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


                        <div class="field-title">
                            Email Address
                        </div>

                        <div class="field-value">

                            <?php

                            echo htmlspecialchars($b);

                            ?>

                        </div>

                    </td>

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

                    <a class="menu-trigger">

                        <span>Menu</span>

                    </a>

                </nav>

            </div>

        </div>

    </div>

</header>

<div class="feedback-edit-container">

    <div class="feedback-edit-header">
        <div class="feedback-edit-logo">  UME </div>
        <h1> Edit Feedback </h1>
        <p> Update your UME feedback details </p>
    </div>

    <div class="feedback-edit-content">

        <div class="heading">
            <h2> Update Your Feedback </h2>
            <p> Modify the feedback details below and submit the form </p>
        </div>

        <form action="feedupdate.php" id="feedupdate" method="post">

          <h2><?php echo $_SESSION['id'];?>

            <div class="card">

                <div class="card-title">

                    Customer Information

                </div>

                <table class="two-column">

                    <tr>
                        <td>
                            <div class="field-title"> Your Name </div>
                            <input type="text" name="yourname" value="<?php echo $yourname; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Email </div>
                            <input type="text" name="email" value="<?php echo $email; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="field-title">Phone Number </div>
                            <input type="text" name="phonenumber" value="<?php echo $phonenumber; ?>">
                        </td>

                        <td>
                            <div class="field-title"> Collection </div>
                            <input type="text" name="collection" value="<?php echo $collection; ?>">
                        </td>
</tr>
<tr>
                        <td>
                            <div class="field-title"> Rating </div>
                            <input type="text" name="rating" value="<?php echo $rating; ?>">
                        </td>
                    </tr>

                </table>

            </div>


            <div class="card">

                <div class="card-title">

                    Feedback Information

                </div>

                <table class="two-column">

                    <tr>
                        <td colspan="2">
                            <div class="field-title"> Your Feedback </div>
                            <textarea name="feedback" rows="6"><?php echo $feedback; ?></textarea>
                        </td>
                    </tr>

                </table>

            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <div class="submit-area">
                <input type="submit" value="Update Feedback">
            </div>

        </form>

        <div class="update-note">
            <p> Update your feedback information carefully before submitting. </p>
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