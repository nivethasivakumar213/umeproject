<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "ume");

if (!$conn) {
    die("Database connection failed");
}

$sql = "SELECT * FROM product WHERE status=1";

$qry = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>

<body>

<h2>Product List</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
    <th>Collection</th>
    <th>Type</th>
    <th>Occasion</th>
    <th>Brand</th>
    <th>File</th>
    <th>Availability</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($qry)) {

?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['category']; ?></td>

    <td><?php echo $row['price']; ?></td>

    <td><?php echo $row['description']; ?></td>

    <td><?php echo $row['collection']; ?></td>

    <td><?php echo $row['type']; ?></td>

    <td><?php echo $row['occasion']; ?></td>

    <td><?php echo $row['brand']; ?></td>

    <td>
        <img src="../uploads/<?php echo $row['file']; ?>"
             width="100"
             height="100">
    </td>

    <td><?php echo $row['availability']; ?></td>

</tr>

<?php
}
?>

</table>

</body>
</html>