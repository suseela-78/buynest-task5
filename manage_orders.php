<?php
include("../db.php");

$result = mysqli_query($conn, "SELECT * FROM orders");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Orders</title>
</head>
<body>

<h2>Manage Orders</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Order ID</th>
    <th>User ID</th>
    <th>Product ID</th>
    <th>Quantity</th>
    <th>Total Price</th>
    <th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['product_id']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['total_price']; ?></td>
<td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>