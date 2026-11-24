```php
<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

if (!$conn) {
    die("Database connection failed");
}

/* Check customer login */

if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


/* Logged-in customer details */

$userid = $_SESSION['id'];
$username = $_SESSION['username'];


/* Get only this customer's orders */

$sql = "SELECT * FROM `order`
        WHERE userid = '$userid'
        AND status = 1
        ORDER BY id DESC";

$qry = mysqli_query($conn, $sql);

if (!$qry) {
    die("Query failed: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>My Orders - UME Collections</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/font-awesome.css">

    <link rel="stylesheet"
          href="../templatemo_558_klassy_cafe/assets/css/templatemo-klassy-cafe.css">

    <style>

        body {
            background: #f8f8f8;
        }

        .order-page {
            padding: 120px 0 60px;
        }

        .page-title {
            text-align: center;
            margin-bottom: 40px;
        }

        .page-title h1 {
            font-size: 35px;
            font-weight: 600;
        }

        .page-title p {
            color: #777;
        }

        .user-box {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .order-card {
            background: white;
            border-radius: 8px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .order-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        .order-title h4 {
            margin: 0;
            font-weight: 600;
        }

        .info-row {
            margin-bottom: 10px;
        }

        .label {
            font-weight: 600;
        }

        .status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 13px;
        }

        .pending {
            background: #fff3cd;
            color: #856404;
        }

        .confirmed {
            background: #cce5ff;
            color: #004085;
        }

        .processing {
            background: #d1ecf1;
            color: #0c5460;
        }

        .shipped {
            background: #343a40;
            color: white;
        }

        .delivered {
            background: #d4edda;
            color: #155724;
        }

        .cancelled {
            background: #f8d7da;
            color: #721c24;
        }

        .payment-paid {
            background: #d4edda;
            color: #155724;
        }

        .payment-pending {
            background: #fff3cd;
            color: #856404;
        }

        .payment-failed {
            background: #f03a08;
            color: white;
        }

        .payment-refunded {
            background: #b8cee4;
            color: white;
        }


        .no-orders {
            background: white;
            text-align: center;
            padding: 50px;
            border-radius: 8px;
        }

        .no-orders i {
            font-size: 50px;
            color: #ff5a50;
            margin-bottom: 15px;
        }

        .back-button {
            background: #ff5a50;
            color: white;
            padding: 10px 25px;
            border-radius: 4px;
            text-decoration: none;
        }

        .back-button:hover {
            color: white;
            text-decoration: none;
        }

    </style>

</head>


<body>


<!-- HEADER -->

<header class="header-area header-sticky">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <nav class="main-nav">

                    <a href="index.php" class="logo">

                        <img src="../templatemo_558_klassy_cafe/images/ume.png" alt="UME Collections">

                    </a>

                    <ul class="nav">

                        <li> <a href="index.php">Home</a> </li>
                        <li> <a href="index.php">Clothing</a> </li>
                        <li> <a href="index.php">Jewels</a> </li>
                        <li> <a href="index.php">Cosmetics</a> </li>
                        <li> <a href="index.php">Place Order</a> </li>
                        <li> <a href="index.php">My Orders</a> </li>
                        <li> <a href="index.php">Feedback</a> </li>
                        <li> <a href="index.php">Logout</a> </li>

                    </ul>

                    <a class="menu-trigger">

                        <span>Menu</span>

                    </a>

                </nav>

            </div>

        </div>

    </div>

</header>


<!-- MY ORDERS -->

<section class="order-page">

    <div class="container">


        <!-- TITLE -->

        <div class="page-title">

            <h1>My Orders</h1>

            <p>
                View your UME Collections orders
            </p>

        </div>


        <div class="user-box">

            <div class="row">

                <div class="col-md-6">

                    <strong>Username:</strong>

                    <?php echo $username; ?>

                </div>


                <div class="col-md-6">

                    <strong>User ID:</strong>

                    <?php  echo $userid; ?>

                </div>

            </div>

        </div>


<?php

if (mysqli_num_rows($qry) > 0) {

    while ($row = mysqli_fetch_assoc($qry)) {

        $orderid = $row['id'];

        $orderstatus = $row['orderstatus'];

        $paymentstatus = $row['paymentstatus'];

?>

        <div class="order-card">

            <div class="order-title">

                <h4>

                    Order #<?php
                    echo htmlspecialchars($orderid); ?>

                </h4>


                <?php

                if ($orderstatus == "Pending") {

                    echo '<span class="status pending">Pending</span>';

                } elseif ($orderstatus == "Confirmed") {

                    echo '<span class="status confirmed">Confirmed</span>';

                } elseif ($orderstatus == "Processing") {

                    echo '<span class="status processing">Processing</span>';

                } elseif ($orderstatus == "Shipped") {

                    echo '<span class="status shipped">Shipped</span>';

                } elseif ($orderstatus == "Delivered") {

                    echo '<span class="status delivered">Delivered</span>';

                } elseif ($orderstatus == "Cancelled") {

                    echo '<span class="status cancelled">Cancelled</span>';

                } else {

                    echo '<span class="status pending">' . htmlspecialchars($orderstatus) . '</span>';

                }

                ?>

            </div>


            <!-- CUSTOMER DETAILS -->

            <div class="row">


                <div class="col-md-4">

                    <div class="info-row">

                        <span class="label">
                            Name:
                        </span>

                        <?php echo $row['firstName'] . " ". $row['middleName'] . " " . $row['lastName'] ; ?>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="info-row">

                        <span class="label">
                            Email:
                        </span>

                        <?php echo $row['email']; ?>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="info-row">

                        <span class="label">
                            Phone:
                        </span>

                        <?php
                        echo htmlspecialchars($row['phone']);
                        ?>

                    </div>

                </div>

            </div>


            <hr>

            <div class="row">

                <div class="col-md-4">

                    <div class="info-row">

                        <span class="label">
                            Collection:
                        </span>

                        <?php
                        echo htmlspecialchars($row['collection']);
                        ?>

                    </div>

                </div>

                <div class="col-md-4">

                    <?php

                    if (!empty($row['saree_name'])) {

                    ?>

                        <div class="info-row">

                            <span class="label">
                                Saree:
                            </span>

                            <?php
                            echo htmlspecialchars($row['saree_name']);
                            ?>

                            <br>

                            Quantity:

                            <?php
                            echo htmlspecialchars($row['saree_quantity']);
                            ?>

                        </div>

                    <?php

                    }

                    ?>

                </div>

                <div class="col-md-4">

                    <?php

                    if (!empty($row['jewelry_name'])) {

                    ?>

                        <div class="info-row">

                            <span class="label">
                                Jewelry:
                            </span>

                            <?php echo htmlspecialchars($row['jewelry_name']); ?>

                            <br>

                            Quantity:

                            <?php echo htmlspecialchars($row['jewelry_quantity']); ?>

                        </div>

                    <?php

                    }

                    ?>

                </div>

            </div>

            <div class="row">

                <div class="col-md-4">

                    <?php

                    if (!empty($row['cosmetic_name'])) {

                    ?>

                        <div class="info-row">

                            <span class="label">
                                Cosmetic:
                            </span>

                            <?php
                            echo htmlspecialchars($row['cosmetic_name']);
                            ?>

                            <br>

                            Shade:

                            <?php
                            echo htmlspecialchars($row['shade']);
                            ?>

                            <br>

                            Quantity:

                            <?php
                            echo htmlspecialchars($row['cosmetic_quantity']);
                            ?>

                        </div>

                    <?php

                    }

                    ?>

                </div>


                <!-- OTHER PRODUCT -->

                <div class="col-md-4">

                    <?php

                    if (!empty($row['product_name'])) {

                    ?>

                        <div class="info-row">

                            <span class="label">
                                Product:
                            </span>

                            <?php
                            echo htmlspecialchars($row['product_name']);
                            ?>

                            <br>

                            Quantity:

                            <?php
                            echo htmlspecialchars($row['other_quantity']);
                            ?>

                        </div>

                    <?php

                    }

                    ?>

                </div>


                <!-- PAYMENT -->

                <div class="col-md-4">

                    <div class="info-row">

                        <span class="label">
                            Payment:
                        </span>

                        <?php
                        echo htmlspecialchars($row['payment_method']);
                        ?>

                    </div>


                    <div class="info-row">

                        <span class="label">
                            Payment Status:
                        </span>

                        <?php

                        if ($paymentstatus == "Paid") {

                            echo '<span class="status payment-paid">
                                  Paid
                                  </span>';

                        } elseif ($paymentstatus == "Pending") {

                            echo '<span class="status payment-pending">
                                  Pending
                                  </span>';

                         } elseif ($paymentstatus == "Failed") {

                            echo '<span class="status payment-failed">
                                  Failed
                                  </span>';

                         } elseif ($paymentstatus == "Refunded") {

                            echo '<span class="status payment-refunded">
                                  Refunded
                                  </span>';
                             

                        } else {

                            echo htmlspecialchars($paymentstatus);

                        }

                        ?>

                    </div>

                </div>

            </div>


            <hr>


            <!-- ADDRESS -->

            <div class="info-row">

                <span class="label">
                    Delivery Address:
                </span>

                <?php
                echo htmlspecialchars($row['address']);
                ?>

            </div>


            <div class="row">

                <div class="col-md-4">

                    <span class="label">
                        Pincode:
                    </span>

                    <?php
                    echo htmlspecialchars($row['pincode']);
                    ?>

                </div>


                <div class="col-md-4">

                    <span class="label">
                        City:
                    </span>

                    <?php
                    echo htmlspecialchars($row['city']);
                    ?>

                </div>


                <div class="col-md-4">

                    <span class="label">
                        State:
                    </span>

                    <?php
                    echo htmlspecialchars($row['state']);
                    ?>

                </div>

            </div>


        </div>


<?php

    }

} else {

?>


        <!-- NO ORDERS -->

        <div class="no-orders">

            <i class="fa fa-shopping-cart"></i>

            <h3>No Orders Found</h3>

            <p>
                You have not placed any orders yet.
            </p>

            <br>

            <a href="order.php" class="back-button">

                Place Your First Order

            </a>

        </div>


<?php

}

?>


        <div class="text-center mt-4">

            <a href="index.php" class="back-button">

                Continue Shopping

            </a>

        </div>


    </div>

</section>


<!-- FOOTER -->

<footer style="background:#ff5a50; padding:45px 0; margin-top:60px;">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-4 col-md-4 col-sm-12">

                <div style="display:flex; align-items:center; gap:18px;">

                    <a href="#"
                       style="width:48px;height:48px;background:white;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#ff5a50;font-size:22px;text-decoration:none;">

                        <i class="fa fa-facebook"></i>

                    </a>

                    <a href="#"
                       style="width:48px;height:48px;background:white;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#ff5a50;font-size:22px;text-decoration:none;">

                        <i class="fa fa-instagram"></i>

                    </a>

                    <a href="#"
                       style="width:48px;height:48px;background:white;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#ff5a50;font-size:22px;text-decoration:none;">

                        <i class="fa fa-twitter"></i>

                    </a>

                    <a href="#"
                       style="width:48px;height:48px;background:white;border-radius:50%;display:flex;align-items:center;justify-content:center;color:#ff5a50;font-size:22px;text-decoration:none;">

                        <i class="fa fa-envelope"></i>

                    </a>

                </div>

            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 text-center">

                <a href="index.php">

                    <img src="../templatemo_558_klassy_cafe/images/ume.png"
                         alt="UME Collections"
                         style="width:55px;height:55px;object-fit:cover;">

                </a>

            </div>


            <div class="col-lg-4 col-md-4 col-sm-12 text-center">

                <p style="color:white;margin:0;font-size:15px;font-weight:500;">

                    © 2026 UME Collections.

                </p>

                <p style="color:white;margin:12px 0 0;font-size:15px;font-weight:500;">

                    Tradition • Elegance • Confidence

                </p>

            </div>

        </div>

    </div>

</footer>


</body>

</html>
```
