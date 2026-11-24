<!DOCTYPE html>
<html>
<head>
    <title>UME Registration</title>

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
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
        }

        .info-table td {
            padding: 14px;
            border-bottom: 1px solid #eeeeee;
        }

        .info-table tr:last-child td {
            border-bottom: none;
        }

        .info-table td:first-child {
            width: 40%;
            color: #888;
            font-size: 13px;
            font-weight: bold;
        }

        .info-table td:last-child {
            color: #333;
            font-size: 15px;
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

        .requirements {
            background-color: #fafafa;
            padding: 20px;
            border-radius: 8px;
        }

        .requirements-title {
            color: #e91e63;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .requirements-text {
            color: #555;
            line-height: 1.7;
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
        <div class="logo"> UME</div>
        <h1>Registration Successful</h1>
        <p>Welcome to UME!</p>
    </div>


    <div class="content">

        <div class="thankyou">
            <h2>Thank You for Registering</h2>
            <p> Your registration details have been received successfully. </p>
        </div>

        <?php
 
     $conn=mysqli_connect("localhost","root","","ume");
     
     echo "<br>";


        
        $a = $_POST['firstName'];
        $b = $_POST['middleName'];
        $c = $_POST['lastName'];

        $d = $_POST['email'];
        $e = $_POST['phone'];
        $f = $_POST['dob'];
        $g = $_POST['gender'];
        $h = $_POST['collection'];
        $i = $_POST['source'];

        $j = $_POST['address'];
        $k = $_POST['pincode'];
        $l = $_POST['city'];
        $m = $_POST['state'];

        $n = $_POST['username'];
        $p = $_POST['password'];
        $vj = $_POST['confirmPassword'];
        
        $q = $_POST['referral'];
        $r = $_POST['message'];



         $s = $_POST['v'];
         foreach($s as $t) {
                echo $t."<br>";
            }

        $u = $_FILES['file']['name'];
        $u1 = $_FILES['file']['size'];
        $u2 = $_FILES['file']['tmp_name'];
        echo $u."<br>";
        echo $u1."<br>";
        echo $u2."<br>";
      $dir = "upload/" . $u;
      $ut = move_uploaded_file($u2, $dir);
      if($ut==TRUE){
        echo "File uploaded";
      }else{
        echo "Not uploaded";
      }
      echo "<br>";

      $cdate=date("y-m-d");
      $status="1";
      $sql="INSERT INTO `reg`(`firstName`, `middleName`, `lastName`, `email`, `phone`, `dob`, `collection`, `gender`, `v`, `file`, `source`, `address`, `pincode`, `city`, `state`, `username`, `password`, `confirmPassword`, `referral`, `message`, `cdate`, `status`)
      VALUES ( '$a','$b','$c','$d','$e','$f','$h','$g','$t','$dir','$i','$j','$k','$l','$m','$n','$p','$vj','$q','$r','$cdate',' $status')";

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

            <div class="card-title"> Personal Information </div>
            <table class="two-column">
                <tr>
                    <td>
                        <div class="field-title">First Name</div>
                        <div class="field-value">
                            <?php echo $a; ?>
                        </div>
                    </td>

                    <td>
                        <div class="field-title">Middle Name</div>
                        <div class="field-value">
                            <?php echo $b; ?>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td>
                        <div class="field-title">Last Name</div>
                        <div class="field-value">
                            <?php echo $c; ?>
                        </div>
                    </td>
                    <td>
                        <div class="field-title">Date of Birth</div>
                        <div class="field-value">
                            <?php echo $f; ?>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="field-title">Gender</div>
                        <div class="field-value">
                            <?php echo $g; ?>
                        </div>
                    </td>
                     <td>
                        <div class="field-title">Collection</div>
                        <div class="field-value">
                            <?php echo $h; ?>
                        </div>
                    </td>
</tr>
<tr>
                    <td>
                        <div class="field-title">Phone</div>
                        <div class="field-value">
                            <?php echo $e; ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="card">
            <div class="card-title"> Contact Information</div>

            <table class="two-column">
                <tr>
                    <td>
                        <div class="field-title">Email</div>
                        <div class="field-value">
                            <?php echo $d; ?> </div>
                    </td>
                    <td>
                        <div class="field-title">City</div>
                        <div class="field-value">
                            <?php echo $l; ?> </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="field-title">State</div>
                        <div class="field-value">
                            <?php echo $m; ?>  </div>
                    </td>
                    <td>
                        <div class="field-title">Pincode</div>
                        <div class="field-value">
                            <?php echo $k; ?>  </div>
                    </td>
                     </tr>

                     <tr>
                    <td>
                        <div class="field-title">Address</div>
                        <div class="field-value">
                            <?php echo $j; ?>  </div>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card">
            <div class="card-title"> Account Information</div>
            <table class="info-table">
                <tr>
                    <td>Username</td>
                    <td> <?php echo $n; ?> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td> <?php echo $p; ?></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td> <?php echo $vj; ?> </td>
                </tr>
                <tr>
                    <td>Referral</td>
                    <td> <?php echo $q; ?>  </td>
                </tr>
                <tr>
                    <td>How did you hear about UME?</td>
                    <td> <?php echo $i; ?></td>
                </tr>
            </table>
        </div>


        <div class="card">
            <div class="card-title">
                Requirements
            </div>

            <div class="requirements">
                <div class="requirements-title"> Your Message</div>

                <div class="requirements-text">
                    <?php echo $r; ?>
                </div>
            </div>
        </div>


        <div class="footer">

            <p> Your information has been successfully submitted. </p>

            <a href="index.php" class="button">Back to Registration </a>
        </div>
    </div>
</div>

</body>
</html>