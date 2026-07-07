<!DOCTYPE html>
<html>
<head>
    <title>BuyNest Admin Dashboard</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            text-align:center;
            margin-top:50px;
        }

        .container{
            width:400px;
            margin:auto;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            color:#333;
        }

        a{
            display:block;
            text-decoration:none;
            background:#007bff;
            color:white;
            padding:12px;
            margin:12px 0;
            border-radius:5px;
        }

        a:hover{
            background:#0056b3;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>BuyNest Admin Dashboard</h2>

    <a href="add_product.php">Add Product</a><br><br>

<a href="edit_product.php?id=1">Edit Product</a><br><br>

<a href="delete_product.php?id=1">Delete Product</a><br><br>

<a href="manage_orders.php">Manage Orders</a><br><br>

<a href="manage_users.php">Manage Users</a><br><br>

<a href="logout.php">Logout</a>
</div>

</body>
</html>