<?php
    session_start();

     $conn=mysqli_connect("localhost","root","","ume");
     
     echo "<br>";
     
     $user = $_SESSION['id'];
        

if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {

    header("Location: login.php");
    exit();

}
?>
        
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>UME Feedback Submitted</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 40px 20px;
        }
        .container {
            width: 850px;
            max-width: 100%;
            margin: auto;
        }
        .header {
            background-color: #e91e63;
            color: white;
            text-align: center;
            padding: 35px 20px;
            border-radius: 15px 15px 0 0;
        }
        .logo {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 4px;
        }
        .header h1 {
            margin-top: 12px;
            font-size: 27px;
        }
        .header p {
            margin-top: 7px;
            font-size: 14px;
        }
        .content {
            background-color: white;
            padding: 35px;
            border-radius: 0 0 15px 15px;
        }
        .thankyou {
            text-align: center;
            margin-bottom: 30px;
        }
        .thankyou h2 {
            color: #333;
            font-size: 25px;
        }
        .thankyou p {
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
            padding: 18px;
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
        .field-value {
            color: #333;
            font-size: 15px;
            font-weight: bold;
            word-break: break-word;
        }
        .rating {
            color: #e91e63;
            font-size: 28px;
            letter-spacing: 3px;
        }
        .feedback-box {
            background-color: #fafafa;
            padding: 20px;
            border-radius: 8px;
            color: #555;
            line-height: 1.7;
            word-break: break-word;
            white-space: pre-wrap;
        }
        .footer {
            text-align: center;
        }
        .footer p {
            color: #888;
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            background-color: #e91e63;
            color: white;
            padding: 12px 28px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
        }
        .button:hover {
            background-color: #c2185b;
        }

    </style>

</head>


<body>


<div class="container">

    <div class="header">

        <div class="logo"> UME </div>

        <h1> Ordered Successfully</h1>

        <p> Thank you for your order! </p>

    </div>

    <div class="content">

        <div class="thankyou">

            <h2> Thank You for Your Order!</h2>

            <p> Your order has been accepted successfully. </p>

        </div>

 
        <?php
      
        $a = $_POST['firstName'];
        $b = $_POST['middleName'];
        $c = $_POST['lastName'];

        $d = $_POST['email'];
        $e = $_POST['phone'];
        $f = $_POST['collection'];
       
    $s = $_POST['saree_type'];
    $sa = $_POST['saree_name'];
    $sb = $_POST['saree_quantity'];

    $j= $_POST['jewelry_type'];
    $ja = $_POST['jewelry_name'];
    $jb = $_POST['jewelry_quantity'];

    $ca = $_POST['cosmetic_type'];
    $cb = $_POST['cosmetic_name'];
    $cc = $_POST['shade'];
    $cd = $_POST['cosmetic_quantity'];

    $pa = $_POST['product_name'];
    $pb = $_POST['other_quantity'];
    $pc = $_POST['product_description'];

    $pay = $_POST['payment_method'];

    $cod = $_POST['cod_amount'];

    $upi = $_POST['upi_amount'];
    $upid = $_POST['upi_transaction_id'];

    $on = $_POST['online_amount'];
    $onid = $_POST['online_transaction_id'];

        $h = $_POST['address'];
        $i = $_POST['pincode'];

        $l = $_POST['city'];
        $k = $_POST['state'];
       
        $cdate=date("y-m-d");
        $status="1";

       $sql = " INSERT INTO `order`( `userid`, `firstName`, `middleName`, `lastName`, `email`, `phone`, `collection`, `saree_type`, `saree_name`, `saree_quantity`, `jewelry_type`, `jewelry_name`, `jewelry_quantity`, `cosmetic_type`, `cosmetic_name`, `shade`, `cosmetic_quantity`, `product_name`, `other_quantity`, `product_description`, `payment_method`, `cod_amount`, `upi_amount`, `upi_transaction_id`, `online_amount`, `online_transaction_id`, `address`, `pincode`, `city`, `state`, `cdate`, `status`)
        VALUES ('$user', '$a','$b','$c','$d','$e','$f','$s','$sa','$sb','$j','$ja','$jb','$ca','$cb','$cc','$cd','$pa','$pb','$pc','$pay','$cod','$upi','$upid','$on','$onid','$h','$i','$l','$k','$cdate','$status')";

  $qry = mysqli_query($conn, $sql);
    if($qry ==TRUE)
        {
            ?>
           <script>
            alert("Thanks for Your Registration");
            window.location.href = "index.php";
            </script>

            <?php

        }else {
            ?>
          <script>
            alert("Something Went Wrong");
            window.location.href = "index.php";
            </script>


            <?php
          
        }
        ?>




<div class="card">

    <div class="card-title"> Customer Information</div>

    <table class="two-column">

        <tr>
            <td>
                <div class="field-title">
                    First Name
                </div>

                <div class="field-value">
                    <?php echo $a; ?>
                </div>
            </td>

            <td>
                <div class="field-title">
                    Middle Name
                </div>

                <div class="field-value">
                    <?php echo $b; ?>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="field-title">
                    Last Name
                </div>

                <div class="field-value">
                    <?php echo $c; ?>
                </div>
            </td>

            <td>
                <div class="field-title">
                    Email
                </div>

                <div class="field-value">
                    <?php echo $d; ?>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div class="field-title">
                    Phone
                </div>

                <div class="field-value">
                    <?php echo $e; ?>
                </div>
            </td>

            <td>
                <div class="field-title">
                    Collection
                </div>

                <div class="field-value">
                    <?php echo $f; ?>
                </div>
            </td>
        </tr>

    </table>

</div>




<?php if ($f == 'sarees') { ?>

<div class="card">

    <div class="card-title">
        Saree Details
    </div>
 
    <table class="two-column">

        <tr>
            <td> <b>Saree Type<b></td>
            <td> <?php echo $s; ?> </td>
       
            <td> <b> Saree Name<b> </td>
            <td> <?php echo $sa; ?> </td>
        
            <td> <b> Quantity<b> </td>
            <td> <?php echo $sb; ?></td>
        </tr>

    </table>

</div>

<?php

 } 

 ?>

<?php if ($f == 'jewelry') { ?>

<div class="card">

    <div class="card-title">
        Jewelry Details
    </div>

    <table class="two-column">

        <tr>
            <td> <b> Jewelry Type<b> </td>
            <td> <?php echo $j; ?> </td>
        </tr>

        <tr>
            <td><b> Jewelry Name<b> </td>
            <td> <?php echo $ja; ?> </td>
        </tr>

        <tr>
            <td> <b> Quantity<b> </td>
            <td> <?php echo $jb; ?> </td>
        </tr>

    </table>

</div>

<?php 

}

?>

<?php if ($f == 'cosmetics') { ?>

<div class="card">

    <div class="card-title">
        Cosmetics Details
    </div>

    <table class="two-column">

        <tr>
            <td> <b> Product Type<b> </td>
            <td> <?php echo $ca; ?> </td>
        </tr>

        <tr>
            <td> <b> Product Name<b> </td>
            <td> <?php echo $cb; ?> </td>
        </tr>

        <tr>
            <td> <b>Shade / Color<b> </td>
            <td> <?php echo $cc; ?> </td>
        </tr>

        <tr>
            <td> <b> Quantity<b> </td>
            <td> <?php echo $cd; ?> </td>
        </tr>

    </table>

</div>

<?php 

}

?>

<?php if ($f == 'other') { ?>

<div class="card">

    <div class="card-title">
        Other Product Details
    </div>

    <table class="two-column">

        <tr>
            <td> <b> Product Name<b> </td>
            <td> <?php echo $pa; ?> </td>
        </tr>

        <tr>
            <td> <b>Quantity<b> </td>
            <td> <?php echo $pb; ?> </td>
        </tr>

        <tr>
            <td> <b> Product Description<b> </td>
            <td> <?php echo $pc; ?> </td>
        </tr>

    </table>

</div>

<?php 

}

?>

<div class="card">

    <div class="card-title">
        Payment Information
    </div>

    <table class="two-column">

        <tr>
            <td> <b>Payment Method<b> </td>
            <td> <?php echo $pay; ?> </td>
        </tr>

        <?php if ($pay == 'cod') { ?>

        <tr>
            <td> <b> COD Amount<b> </td>
            <td> ₹<?php echo $cod; ?> </td>
        </tr>

        <?php } ?>

        <?php if ($pay == 'upi') { ?>

        <tr>
            <td> <b>UPI Amount<b> </td>
            <td> ₹<?php echo $upi; ?> </td>
        </tr>

        <tr>
            <td> <b>UPI Transaction ID<b> </td>
            <td> <?php echo $upid; ?> </td>
        </tr>

        <?php } ?>

        <?php if ($pay == 'online') { ?>

        <tr>
            <td> <b>Online Payment Amount<b> </td>
            <td> ₹<?php echo $on; ?> </td>
        </tr>

        <tr>
            <td> <b> Transaction ID<b> </td>
            <td> <?php echo $onid; ?> </td>
        </tr>

        <?php } ?>

    </table>

</div>

<div class="card">

    <div class="card-title">
        Delivery Address
    </div>

    <table class="two-column">

        <tr>
            <td>
                <div class="field-title">
                    Address </div>

                <div class="field-value">
                    <?php echo $h; ?> </div>
            </td>

            <td>

                <div class="field-title">
                    Pincode
                </div>

                <div class="field-value">
                     <?php echo $i; ?> </div>

            </td>
        </tr>

        <tr>

            <td>

                <div class="field-title">
                    City
                </div>

                <div class="field-value">
                    <?php echo $l; ?>
                </div>

            </td>

            <td>

                <div class="field-title">
                    State
                </div>

                <div class="field-value">
                    <?php echo $k; ?>
                </div>

            </td>

        </tr>

    </table>

</div>


<div class="footer">

    <p>
        Your order has been successfully submitted.
    </p>

    <a href="index.php" class="button">
        Back to Home
    </a>

</div>

</div>

</body>

</html>