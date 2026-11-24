<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "ume");

$a = $_POST['username'];
echo $a."<br>";
$b = $_POST['password'];
echo $b."<br>";
$sql="select * from reg where username='$a' and password='$b' and status=1";
$qry=mysqli_query($conn,$sql);
$row=mysqli_num_rows($qry);
echo $row;

         if($row==1){
            while($row=mysqli_fetch_assoc($qry))
               {
                  $id=$row['id'];
                  $name=$row['firstName'].$row['middleName'].$row['lastName'];
                  $username=$row['username'];
                   $_SESSION['id']=$id;
                   $_SESSION['name']=$name;
                   $_SESSION['username']=$username;
                   $_SESSION['login'] = true;
                   ?>
            <script>
               alert("Login sucessfully");
              window.location.href = "index.php";
            </script>
           

            <?php
               }
           
         }else{
            
            ?>
            <script>
               alert("Wrong Username and Password");
              window.location.href = "index.php";
            </script>
           

            <?php
         }

         ?>


