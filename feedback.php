<?php
    session_start();

     $conn=mysqli_connect("localhost","root","","ume");
     
     echo "<br>";
     
     $user = $_SESSION['id'];
        
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

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
        <h1> Feedback Submitted Successfully </h1>
        <p> Thank you for sharing your valuable feedback! </p>

    </div>

    <div class="content">

        <div class="thankyou">

            <h2> Thank You for Your Feedback! </h2>
            <p> Your feedback has been received successfully. </p>

        </div>

<?php

        $a = $_POST['yourname'];
        $b = $_POST['email'];
        $p = $_POST['phonenumber'];
        $c = $_POST['collection'];
        $d = $_POST['rating'];
        $e = $_POST['feedback'];
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

$sql= "INSERT INTO `feedback`( `userid`, `yourname`, `email`, `phonenumber`, `collection`, `rating`, `feedback`, `file`, `cdate`, `status`) 
VALUES ('$user', '$a','$b','$p', '$c', '$d','$e','$dir', '$cdate','$status') ";


       
$qry = mysqli_query($conn, $sql);
    if($qry ==TRUE)
        {
           ?>
           <script>
            alert("Thanks for Your Feedback");
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

            <div class="card-title">
                Customer Information
            </div>


            <table class="two-column">


                <tr>

                    <td>

                        <div class="field-title">
                            Your Name
                        </div>

                        <div class="field-value">

                            <?php

                            echo htmlspecialchars($a);

                            ?>

                        </div>

                    </td>


                    <td>

                        <div class="field-title">
                            Email Address
                        </div>

                        <div class="field-value">

                            <?php

                            echo htmlspecialchars($b);

                            ?>

                        </div>

                    </td>

                </tr>


                <tr>

                <td>
                    
                        <div class="field-title">
                           Phone Number
                        </div>

                        <div class="field-value">

                            <?php

                            echo htmlspecialchars($p);

                            ?>

                        </div>

                    </td>

                    <td>

                        <div class="field-title">
                            Selected Collection
                        </div>

                        <div class="field-value">

                            <?php

                            echo htmlspecialchars($c);

                            ?>

                        </div>

                    </td>


                    <td>

                        <div class="field-title">
                            Overall Rating
                        </div>

                        <div class="field-value rating">

                            <?php

                            echo str_repeat("★", (int)$d);

                            echo str_repeat(
                                "☆",
                                5 - (int)$d
                            );

                            ?>

                        </div>

                    </td>

                </tr>


            </table>

        </div>


        <!-- FEEDBACK CARD -->

        <div class="card">

            <div class="card-title">
                Your Feedback
            </div>


            <div class="feedback-box">

                <?php

                echo ($e);

                ?>

            </div>

        </div>


        <!-- FOOTER -->

        <div class="footer">

            <p>
                Your information has been successfully submitted.
            </p>


             <a href="index.php" class="button">
                Back to Feedback Form
            </a>

        </div>


    </div>

</div>


</body>

</html>
