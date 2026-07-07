<?php
session_start();

$conn = mysqli_connect("localhost","root","","buynest");

if(!$conn){
    die("Database Connection Failed");
}

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){

    $user_id = 1; // Temporary User ID

    foreach($_SESSION['cart'] as $item){

        $product_id = $item['id'];
        $quantity = 1;
        $total_price = $item['price'];
        $status = "Placed";

        mysqli_query($conn,"
        INSERT INTO orders(user_id,product_id,quantity,total_price,status)
        VALUES('$user_id','$product_id','$quantity','$total_price','$status')
        ");
    }

    unset($_SESSION['cart']);

}else{
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Order Success</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#6a11cb,#2575fc,#00c6ff);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    margin:0;
}

.box{
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

h2{
    color:green;
}

p{
    font-size:18px;
}

a{
    display:inline-block;
    margin-top:20px;
    padding:12px 25px;
    background:#6a11cb;
    color:white;
    text-decoration:none;
    border-radius:8px;
}

a:hover{
    background:#4b0fa8;
}
</style>

</head>
<body>
    

<div class="box">
    <h2>🎉 Order Placed Successfully!</h2>
    <p>Thank you for shopping with BuyNest.</p>
    <a href="products.php">Continue Shopping</a>
</div>

</body>
</html>