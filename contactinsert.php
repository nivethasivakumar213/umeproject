<?php

$conn = mysqli_connect("localhost", "root", "", "ume");

if (!$conn) {
    die("Database connection failed");
}

$name = $_POST['name'];
$email = $_POST['email1'];
$phone = $_POST['phone1'];
$message = $_POST['message'];
$cdate = date("y-m-d ");
$sql = "INSERT INTO `contact`( `name`, `email`, `phone`, `message`,`cdate`, `status`)
 VALUES ('$name', '$email', '$phone', '$message','$cdate',  1)";
$qry = mysqli_query($conn, $sql);


if ($qry)     {
           ?>
           <script>
            alert("Your message has been sent successfully!");
            window.location.href = "index.html";
            </script>

            <?php

        }else {
            ?>
          <script>
            alert("Message sending failed!");
            window.location.href = "index.html";
            </script>


            <?php
          
        }


        
        ?>