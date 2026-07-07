<!DOCTYPE html>
<html>
<head>
<title>BuyNest - Order Success</title>

<style>

body{
    margin:0;
    padding:0;
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#6a11cb,#2575fc,#00c6ff);
    background-size:400% 400%;
    animation:bg 10s ease infinite;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

@keyframes bg{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

.order-box{
    width:500px;
    background:#fff;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.order-box h1{
    color:#28a745;
    margin-bottom:15px;
}

.order-box p{
    font-size:18px;
    color:#555;
    margin-bottom:20px;
}

.btn{
    display:inline-block;
    padding:12px 25px;
    background:#6a11cb;
    color:white;
    text-decoration:none;
    border-radius:8px;
    font-size:18px;
}

.btn:hover{
    background:#4b0fa8;
}

</style>

</head>
<body>
    

<div class="order-box">

<h1>✅ Order Placed Successfully!</h1>

<p>Thank you for shopping with <b>BuyNest</b>.</p>

<p>Your order has been placed successfully.</p>

<p>You will receive your delivery within <b>3 - 5 business days</b>.</p>

<a href="products.php" class="btn">Continue Shopping</a>

</div>

</body>
</html>