<?php

     $conn=mysqli_connect("localhost","root","","ume");
     $id = $_GET['h'];
     echo $id."<br>";

    $status="2";

        $sql = " UPDATE `reg` SET `status`='$status'
         WHERE id=$id ";

         $qry=mysqli_query($conn,$sql);
         if($qry==TRUE){
            ?>
             <script>
            alert("Record deleted");
            window.location.href = "view.php";
            </script>

            <?php 

         }else{
            ?>
          
           <script>
            alert("Not deleted");
            window.location.href = "view.php";
            </script>
<?php
         }



    ?>