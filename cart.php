<?php
session_start();

$conn = mysqli_connect("localhost","root","","buynest");

if(!$conn){
    die("Database Connection Failed");
}

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

if(isset($_GET['id'])){

    $id = intval($_GET['id']);

    $result = mysqli_query($conn,"SELECT * FROM products WHERE id='$id'");

    if($row = mysqli_fetch_assoc($result)){

        $_SESSION['cart'][] = [
            "id"=>$row['id'],
            "name"=>$row['name'],
            "price"=>$row['price']
        ];
    }

    header("Location: cart.php");
    exit();
}

if(isset($_GET['remove'])){

    $key = $_GET['remove'];

    if(isset($_SESSION['cart'][$key])){
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }

    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>My Cart</title>

<style>

body{
font-family:Arial,sans-serif;
background:linear-gradient(135deg,#6a11cb,#2575fc,#00c6ff);
margin:0;
padding:30px;
}

header{
background:#007bff;
padding:15px;
text-align:center;
color:white;
}

.container{
max-width:900px;
margin:auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 0 15px rgba(0,0,0,0.3);
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

th,td{
border:1px solid #ddd;
padding:12px;
text-align:center;
}

th{
background:#007bff;
color:white;
}

.remove{
background:red;
color:white;
padding:8px 15px;
text-decoration:none;
border-radius:5px;
}

.checkout{
display:inline-block;
margin-top:20px;
background:green;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
}

.checkout:hover{
background:darkgreen;
}

</style>

</head>

<body>

<header>
<h2>🛒 BuyNest</h2>
</header>

<div class="container">

<h2>My Shopping Cart</h2>

<table>

<tr>
<th>Product</th>
<th>Price</th>
<th>Action</th>
</tr>

<?php

$total = 0;

if(count($_SESSION['cart'])>0){

foreach($_SESSION['cart'] as $key=>$item){

$total += $item['price'];

?>

<tr>

<td><?php echo $item['name']; ?></td>

<td>₹<?php echo $item['price']; ?></td>

<td>
<a class="remove" href="cart.php?remove=<?php echo $key; ?>">Remove</a>
</td>

</tr>

<?php

}

}else{

echo "<tr><td colspan='3'>Cart is Empty</td></tr>";

}

?>

</table>

<h3>Total Price : ₹<?php echo $total; ?></h3>

<a class="checkout" href="checkout.php">
Proceed to Checkout
</a>

</div>

</body>
</html>