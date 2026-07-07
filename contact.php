<!DOCTYPE html>
<html>
<head>
<title>BuyNest - Contact Us</title>

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

.contact-box{
    width:450px;
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

h2{
    text-align:center;
    color:#6a11cb;
    margin-bottom:20px;
}

input,
textarea{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:16px;
    box-sizing:border-box;
}

textarea{
    height:120px;
    resize:none;
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

.info{
    text-align:center;
    margin-top:20px;
    color:#555;
}

</style>

</head>

<body>
<header style="background:#007bff;padding:15px;">
    <h2 style="color:white;">🛒 BuyNest</h2>

    
</header>
<div class="contact-box">

<h2>📞 Contact Us</h2>

<form>

<input type="text" placeholder="Enter Your Name" required>

<input type="email" placeholder="Enter Your Email" required>

<textarea placeholder="Write Your Message" required></textarea>

<button