<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

   
<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$sql = "select * from feedback where status=1";

$qry = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="UME Collections">
    <meta name="author" content="UME Collections">
    <title>UME Collections - Registration Records</title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- UME PROJECT CSS -->

    <link rel="stylesheet" href="../templatemo_558_klassy_cafe/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../templatemo_558_klassy_cafe/assets/css/font-awesome.css">

    <link rel="stylesheet" href="../templatemo_558_klassy_cafe/assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="../templatemo_558_klassy_cafe/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="../templatemo_558_klassy_cafe/assets/css/lightbox.css">


    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

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


<br><br><br><br>

<div class="table-responsive">

<h2><?php echo $_SESSION['name'];?><br><br>
<a href="index.php" class="button">Log Out</a></h2>

    <table class="table table-bordered">

        <thead>

            <tr>
                <th>ID No</th>
                <th>User Id</th>
                <th>Your Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Collections</th>
                <th>Rating</th>
                <th>Feedback</th>
                <th>Reviews</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

<?php

while($row = mysqli_fetch_assoc($qry)){

    $file = $row['file'];

    $id = $row['id'];

?>

            <tr>

                <td> <?php echo $row['id']; ?> </td>
                <td> <?php echo $row['userid'];?></td>
                <td> <?php echo $row['yourname']; ?> </td>
                <td> <?php echo $row['email']; ?> </td>
                <td> <?php echo $row['phonenumber']; ?> </td>
                <td> <?php echo $row['collection']; ?> </td>
                <td> <?php echo $row['rating']; ?> </td>
                <td> <?php echo $row['feedback']; ?> </td>
                <td>
                    <img src="<?php echo $file; ?>"  alt="Image" width="200" height="200" style="object-fit: cover; border-radius: 8px;">
                 </td>


                <td>
                    <a href="feededit.php?h=<?php echo $id; ?>"> Edit </a>
                    <a href="feeddelete.php?h=<?php echo $id; ?>"> Delete </a>
                </td>

            </tr>

<?php

}

?>

        </tbody>

    </table>

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