<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

include("db.php");

$email = $_SESSION['email'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>BuyNest - My Profile</title>

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
    min-height:100vh;
}

@keyframes bg{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

.profile-box{
    width:500px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
    text-align:center;
}

.profile-box h2{
    color:#6a11cb;
    margin-bottom:25px;
}

.profile-box p{
    font-size:18px;
    margin:15px 0;
    color:#333;
}

.btn{
    display:inline-block;
    margin-top:20px;
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

<div class="profile-box">

<h2>👤 My Profile</h2>

<p><strong>Full Name:</strong> <?php echo $user['name']; ?></p>

<p><strong>Email:</strong> <?php echo $user['email']; ?></p>

<p><strong>Welcome to BuyNest!</strong></p>

<a href="products.php" class="btn">🛍 Continue Shopping</a>

<br><br>

<a href="logout.php" class="btn">🚪 Logout</a>

</div>

</body>
</html>