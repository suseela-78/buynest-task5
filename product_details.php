<?php
include("db.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $row['name']; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2><?php echo $row['name']; ?></h2>

<img src="uploads/<?php echo $row['image']; ?>" width="250">

<h3>Price: ₹<?php echo $row['price']; ?></h3>

<p><?php echo $row['description']; ?></p>

<p>Category: <?php echo $row['category']; ?></p>

<p>Stock: <?php echo $row['stock']; ?></p>

<a href="cart.php?id=<?php echo $row['id']; ?>">
    <button>Add to Cart</button>
</a>

<br><br>

<a href="products.php">⬅ Back to Products</a>

</body>
</html>