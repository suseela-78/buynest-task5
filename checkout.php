<?php
if(isset($_POST['place_order'])){
    echo "<script>alert('Order Placed Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>BuyNest - Checkout</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:linear-gradient(135deg,#6dd5fa,#2980b9);
            min-height:100vh;
        }

        header{
            background:#007bff;
            color:white;
            padding:20px;
            text-align:center;
            font-size:28px;
            font-weight:bold;
            box-shadow:0 2px 10px rgba(0,0,0,0.3);
        }

        .checkout-box{
            width:420px;
            background:#fff;
            margin:60px auto;
            padding:30px;
            border-radius:15px;
            box-shadow:0 10px 25px rgba(0,0,0,0.3);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        input{
            width:100%;
            padding:12px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:6px;
            font-size:16px;
        }

        button{
            width:100%;
            padding:12px;
            background:#28a745;
            color:white;
            border:none;
            border-radius:6px;
            font-size:18px;
            cursor:pointer;
        }

        button:hover{
            background:#218838;
        }

        footer{
            text-align:center;
            color:white;
            margin-top:30px;
            padding:15px;
        }

        footer a{
            color:white;
            text-decoration:none;
            margin:0 10px;
            font-weight:bold;
        }

        footer a:hover{
            text-decoration:underline;
        }

    </style>
</head>

<body>

<header>
    🛒 BuyNest
</header>

<div class="checkout-box">

    <h2>Checkout</h2>

    <form method="POST">

        <input type="text" name="name" placeholder="Full Name" required>

        <input type="text" name="address" placeholder="Address" required>

        <input type="text" name="phone" placeholder="Phone Number" required>

        <button type="submit" name="place_order">Place Order</button>
        <br><br>

<a href="index.php">
    <button type="button">Go to Home</button>
</a>

    </form>

</div>

<footer>
    © 2026 BuyNest | 
    <a href="https://github.com/suseela-78" target="_blank">GitHub</a> |
    <a href="https://www.linkedin.com/in/bhukya-naga-suseela-17a85b386" target="_blank">LinkedIn</a>
</footer>

</body>
</html>