<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

if (!$conn) {
    die("Database connection failed");
}

$a = $_POST['category'];
$b = $_POST['price'];
$c = $_POST['description'];
$d = $_POST['collection'];
$e = $_POST['type'];
$f = $_POST['occasion'];
$g = $_POST['brand'];
$h = $_POST['availability'];

$file = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];

move_uploaded_file($tmp, "../uploads/" . $file);

$user = $_SESSION['id'];

$sql = "INSERT INTO product
(category, price, description, collection, type, occasion, brand, file, availability, status)
VALUES
('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$file', '$h', , 1)";

$qry = mysqli_query($conn, $sql);

if ($qry) {
    header("Location: productview.php");
} else {
    echo "Product insert failed";
}

?>