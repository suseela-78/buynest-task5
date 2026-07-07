<?php
include("db.php");

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($check)>0){

        echo "<script>alert('Email already exists!');</script>";

    }else{

        $sql = "INSERT INTO users(username,email,password)
                VALUES('$username','$email','$password')";

        if(mysqli_query($conn,$sql)){

            echo "<script>
            alert('Registration Successful!');
            window.location='login.php';
            </script>";

        }else{

            echo "<script>alert('Registration Failed!');</script>";

        }

    }

}
?>

<!DOCTYPE html>
<html>
<head>
<title>BuyNest Register</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:linear-gradient(135deg,#6a11cb,#2575fc,#00c6ff);
background-size:400% 400%;
animation:bg 10s infinite;
min-height:100vh;
}

@keyframes bg{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

header{
background:#007bff;
padding:20px;
text-align:center;
color:white;
font-size:28px;
font-weight:bold;
}

.register-box{
width:420px;
background:#fff;
padding:30px;
margin:60px auto;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.3);
}

h2{
text-align:center;
color:#6a11cb;
margin-bottom:20px;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;
}

button{
width:100%;
padding:12px;
background:#6a11cb;
color:white;
border:none;
border-radius:8px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#4b0fa8;
}

p{
text-align:center;
margin-top:15px;
}

a{
color:#6a11cb;
text-decoration:none;
font-weight:bold;
}

footer{
text-align:center;
padding:15px;
margin-top:30px;
color:white;
}

footer a{
color:white;
text-decoration:none;
margin:0 10px;
}

</style>

</head>

<body>

<header>
🛒 BuyNest
</header>

<div class="register-box">

<h2>🛍 BuyNest Register</h2>

<form method="POST">

<input type="text" name="username" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="password" name="password" placeholder="Password" required>

<button type="submit" name="register">Create Account</button>

</form>

<p>
Already have an account?
<a href="login.php">Login</a>
</p>

</div>

<footer>
© 2026 BuyNest |
<a href="https://github.com/suseela-78" target="_blank">GitHub</a> |
<a href="https://www.linkedin.com/in/bhukya-naga-suseela-17a85b386" target="_blank">LinkedIn</a>
</footer>

</body>
</html>