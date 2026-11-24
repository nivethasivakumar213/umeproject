<?php

 session_start();

     $conn=mysqli_connect("localhost","root","","ume");
   
     $a = $_POST['firstName'];
     echo $a."<br>";
        $b = $_POST['middleName'];
        echo $b."<br>";
        $c = $_POST['lastName'];
        echo $c."<br>";
        $d = $_POST['email'];
        echo $d."<br>";
        $e = $_POST['phone'];
        echo $e."<br>";
        $f = $_POST['dob'];
        echo $f."<br>";
        $i = $_POST['source'];
        echo $i."<br>";

        $j = $_POST['address'];
        echo $j."<br>";
        $k = $_POST['pincode'];
        echo $k."<br>";
        $l = $_POST['city'];
        echo $l."<br>";
        $m = $_POST['state'];
        echo $m."<br>";

        $n = $_POST['username'];
        echo $n."<br>";
        $p = $_POST['password'];
        echo $p."<br>";
        $vj = $_POST['confirmPassword'];
        echo $vj."<br>";
        
        $q = $_POST['referral'];
        echo $q."<br>";
        $r = $_POST['message'];
        echo $r."<br>";
        $id=$_POST['id'];
        echo $id."<br>";

       $udate=date("y-m-d");
       $uperson= $_SESSION['name'];
       $status="1";


        $sql =" UPDATE `reg` SET `firstName`='$a',`middleName`='$b',`lastName`='$c',`email`='$d',`phone`='$e',`dob`='$f',
        `source`='$i',`address`='$j',`pincode`='$k',`city`='$l',`state`='$m',`username`='$n',`password`='$p',`confirmPassword`='$vj',
        `referral`='$q',`message`='$r',`udate`='$udate',`uperson`='$uperson',`status`='$status'
         WHERE id=$id";

         $qry=mysqli_query($conn,$sql);
         if($qry==TRUE){
            ?>
            <script>
               alert("Record Updated");
              window.location.href = "view.php";
            </script>

            <?php
            
         }else{
            ?>
            <script>
               alert("Not Updated");
              window.location.href = "edit.php?h=<?php echo $id;?>";
            </script>
           

            <?php
         }

         ?>