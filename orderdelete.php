
<?php

$conn = mysqli_connect("localhost", "root", "", "ume");
$id = $_GET['h'];
echo $id."<br>";

$status = "2";

$sql = " UPDATE `order` SET `status`='$status'
  WHERE id=$id";

$qry = mysqli_query($conn, $sql);

if($qry == TRUE)
{
    ?>

    <script>

        alert("Order deleted");

        window.location.href = "orderview.php";

    </script>

    <?php
}
else
{
    ?>

    <script>

        alert("Order not deleted");

        window.location.href = "orderview.php";

    </script>

    <?php
}

?>
