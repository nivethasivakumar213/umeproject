<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

$user = $_SESSION['id'];
echo $user."<br>";
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
$f = $_POST['collection'];
echo $f."<br>";
/* SAREE */
$g = $_POST['saree_type'];
echo $g."<br>";
$h = $_POST['saree_name'];
echo $h."<br>";
$i = $_POST['saree_quantity'];
echo $i."<br>";
/* JEWELRY */
$j = $_POST['jewelry_type'];
echo $j."<br>";
$k = $_POST['jewelry_name'];
echo $k."<br>";
$l = $_POST['jewelry_quantity'];
echo $l."<br>";
/* COSMETICS */
$m = $_POST['cosmetic_type'];
echo $m."<br>";
$n = $_POST['cosmetic_name'];
echo $n."<br>";
$o = $_POST['shade'];
echo $o."<br>";
$p = $_POST['cosmetic_quantity'];
echo $p."<br>";
/* OTHER */
$q = $_POST['product_name'];
echo $q."<br>";
$r = $_POST['other_quantity'];
echo $r."<br>";
$s = $_POST['product_description'];
echo $s."<br>";
/* PAYMENT */
$t = $_POST['payment_method'];
echo $t."<br>";
$u = $_POST['cod_amount'];
echo $u."<br>";
$v = $_POST['upi_amount'];
echo $v."<br>";
$w = $_POST['upi_transaction_id'];
echo $w."<br>";
$x = $_POST['online_amount'];
echo $x."<br>";
$y = $_POST['online_transaction_id'];
echo $y."<br>";
/* ADDRESS */
$z = $_POST['address'];
echo $z."<br>";
$aa = $_POST['pincode'];
echo $aa."<br>";
$ab = $_POST['city'];
echo $ab."<br>";
$ac = $_POST['state'];
echo $ac."<br>";
/* ID */
$id = $_POST['id'];
echo $id."<br>";
/* UPDATE DETAILS */
$udate = date("y-m-d");
$uperson= $_SESSION['name'];
$status = "1";


$sql = "UPDATE `order` SET `userid`='$user',`firstName`='$a', `middleName`='$b', `lastName`='$c', `email`='$d', `phone`='$e', `collection`='$f', `saree_type`='$g', `saree_name`='$h', `saree_quantity`='$i',
`jewelry_type`='$j', `jewelry_name`='$k', `jewelry_quantity`='$l', `cosmetic_type`='$m', `cosmetic_name`='$n', `shade`='$o', `cosmetic_quantity`='$p',
`product_name`='$q', `other_quantity`='$r', `product_description`='$s', `payment_method`='$t', `cod_amount`='$u', `upi_amount`='$v', `upi_transaction_id`='$w',
`online_amount`='$x', `online_transaction_id`='$y', `address`='$z', `pincode`='$aa', `city`='$ab', `state`='$ac', `udate`='$udate', `uperson`='$uperson', `status`='$status'
WHERE id=$id";

$qry = mysqli_query($conn, $sql);

if($qry == TRUE)
{
    ?>

    <script>

        alert("Order Updated");

        window.location.href = "orderview.php";

    </script>

    <?php
}
else
{
    ?>

    <script>

        alert("Order Not Updated");

        window.location.href = "orderedit.php?h=<?php echo $id; ?>";

    </script>

    <?php
}

?>
