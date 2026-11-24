<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$user = $_SESSION['id'];
echo $user."<br>";
$a = $_POST['yourname'];
echo $a."<br>";
$b = $_POST['email'];
echo $b."<br>";
$p = $_POST['phonenumber'];
echo $p."<br>";
$c = $_POST['collection'];
echo $c."<br>";
$d = $_POST['rating'];
echo $d."<br>";
$e = $_POST['feedback'];
echo $e."<br>";
$id = $_POST['id'];
echo $id."<br>";

$udate = date("y-m-d");
$uperson= $_SESSION['name'];
$status = "1";

$sql = " UPDATE `feedback` SET `userid`='$user',`yourname`='$a',`email`='$b',`phonenumber` = '$p', `collection`='$c',`rating`='$d',`feedback`='$e',`udate`='$udate',`uperson`='$uperson',`status`='$status'
 WHERE id = $id";


 $qry = mysqli_query($conn,$sql);

 if($qry==TRUE){
         ?>
            <script>
               alert("Record Updated");
              window.location.href = "feedview.php";
            </script>

            <?php
            
         }else{
            ?>
            <script>
               alert("Not Updated");
              window.location.href = "feededit.php?h=<?php echo $id;?>";
            </script>
           

            <?php
         }
    
?>
 