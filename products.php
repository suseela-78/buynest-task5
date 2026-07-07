<?php
include("db.php");

if(isset($_GET['search'])){
    $search = $_GET['search'];
    $result = mysqli_query($conn,"SELECT * FROM products WHERE name LIKE '%$search%'");
}else{
    $result = mysqli_query($conn,"SELECT * FROM products");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>BuyNest Products</title>

<style>

body{
    margin:0;
    padding:20px;
    font-family:Arial,sans-serif;
    background:linear-gradient(135deg,#0f172a,#2563eb,#38bdf8,#a855f7);
    background-size:400% 400%;
    animation:bg 10s infinite;
}

@keyframes bg{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

h2{
    text-align:center;
    color:white;
    font-size:40px;
}

form{
    text-align:center;
    margin-bottom:30px;
}

input{
    width:300px;
    padding:12px;
    border:none;
    border-radius:8px;
    font-size:16px;
}

form button{
    padding:12px 20px;
    border:none;
    border-radius:8px;
    background:#7c3aed;
    color:white;
    cursor:pointer;
}

.products{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:25px;
}

.product-card{
    background:white;
    border-radius:15px;
    padding:20px;
    text-align:center;
    box-shadow:0 10px 20px rgba(0,0,0,.2);
    transition:.3s;
}

.product-card:hover{
    transform:translateY(-8px);
}

.product-card img{
    width:180px;
    height:180px;
    object-fit:contain;
}

.product-card a{
    text-decoration:none;
    color:black;
    font-size:22px;
    font-weight:bold;
}

.price{
    color:#7c3aed;
    font-size:24px;
    font-weight:bold;
    margin-top:10px;
}

.category{
    color:gray;
    margin-top:5px;
}

.cart-btn{
    display:inline-block;
    margin-top:15px;
    background:#7c3aed;
    color:white;
    padding:10px 20px;
    border-radius:10px;
    text-decoration:none;
}

.cart-btn:hover{
    background:#5b21b6;
}

</style>

</head>

<body>
    
<form method="GET">
<input type="text" name="search" placeholder="Search Products">
<button type="submit">Search</button>
</form>

<h2>🛍 Our Products</h2>

<div class="products">

<?php
while($row=mysqli_fetch_assoc($result)){
?>

<div class="product-card">

<img src="uploads/<?php echo $row['image']; ?>">

<br><br>

<a href="product_details.php?id=<?php echo $row['id']; ?>">
<?php echo $row['name']; ?>
</a>

<div class="price">
₹<?php echo $row['price']; ?>
</div>

<div class="category">
<?php echo $row['category']; ?>
</div>

<a class="cart-btn" href="cart.php?id=<?php echo $row['id']; ?>">
Add to Cart
</a>

</div>

<?php
}
?>

</div>

</body>
</html>