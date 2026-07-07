<?php
include("../db.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];

    mysqli_query($conn,
    "UPDATE products
     SET name='$name', price='$price'
     WHERE id='$id'");

    echo "<script>alert('Product Updated Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Product</title>
</head>
<body>

<h2>Edit Product</h2>

<form method="POST">

<input type="text" name="name"
value="<?php echo $row['name']; ?>">

<br><br>

<input type="number" name="price"
value="<?php echo $row['price']; ?>">

<br><br>

<button type="submit" name="update">
Update Product
</button>

</form>

</body>
</html>