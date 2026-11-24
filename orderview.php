<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "ume");
$sql = "select * from `order` where status=1";
$qry = mysqli_query($conn,$sql);

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

                    <a href="index.php" class="logo">

                        <img src="../templatemo_558_klassy_cafe/images/ume.png"
                             alt="UME Collections">

                    </a>

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


<br><br><br><br>

<div class="table-responsive">

<h2><?php echo $_SESSION['name'];?><br><br>
<a href="index.php" class="button">Log Out</a></h2>

<table class="table table-bordered">

    <thead>
        
        <tr>
            
            <th>ID</th>
            <th>User Id</td>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Collection</th>
            <!-- Saree -->
            <th>Saree Type</th>
            <th>Saree Name</th>
            <th>Saree Quantity</th>
            <!-- Jewelry -->
            <th>Jewelry Type</th>
            <th>Jewelry Name</th>
            <th>Jewelry Quantity</th>
            <!-- Cosmetics -->
            <th>Cosmetic Type</th>
            <th>Cosmetic Name</th>
            <th>Shade</th>
            <th>Cosmetic Quantity</th>
            <!-- Other -->
            <th>Product Name</th>
            <th>Other Quantity</th>
            <th>Product Description</th>
            <!-- Payment -->
            <th>Payment Method</th>
            <th>COD Amount</th>
            <th>UPI Amount</th>
            <th>UPI Transaction ID</th>
            <th>Online Amount</th>
            <th>Online Transaction ID</th>
            <!-- Address -->
            <th>Address</th>
            <th>Pincode</th>
            <th>City</th>
            <th>State</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php

while ($row = mysqli_fetch_assoc($qry)) {

    $id = $row['id'];

?>

        <tr>
            
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['userid'];?></td>
            <td><?php echo $row['firstName']; ?></td>
            <td><?php echo $row['middleName']; ?></td>
            <td><?php echo $row['lastName']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['collection']; ?></td>
            <!-- SAREE -->
            <td><?php echo $row['saree_type']; ?></td>
            <td><?php echo $row['saree_name']; ?></td>
            <td><?php echo $row['saree_quantity']; ?></td>
            <!-- JEWELRY -->
            <td><?php echo $row['jewelry_type']; ?></td>
            <td><?php echo $row['jewelry_name']; ?></td>
            <td><?php echo $row['jewelry_quantity']; ?></td>
            <!-- COSMETICS -->
            <td><?php echo $row['cosmetic_type']; ?></td>
            <td><?php echo $row['cosmetic_name']; ?></td>
            <td><?php echo $row['shade']; ?></td>
            <td><?php echo $row['cosmetic_quantity']; ?></td>
            <!-- OTHER -->
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['other_quantity']; ?></td>
            <td><?php echo $row['product_description']; ?></td>
            <!-- PAYMENT -->
            <td><?php echo $row['payment_method']; ?></td>
            <td><?php echo $row['cod_amount']; ?></td>
            <td><?php echo $row['upi_amount']; ?></td>
            <td><?php echo $row['upi_transaction_id']; ?></td>
            <td><?php echo $row['online_amount']; ?></td>
            <td><?php echo $row['online_transaction_id']; ?></td>
            <!-- ADDRESS -->
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['pincode']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['state']; ?></td>
            <!-- ACTION -->

            <td>
                <a href="orderedit.php?h=<?php echo $id; ?>">
                    Edit
                </a>

                <a href="orderdelete.php?h=<?php echo $id; ?>"> 
                Delete
                </a>
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