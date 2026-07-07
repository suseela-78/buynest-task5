<<?php
include("../db.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($temp, "../uploads/".$image);

    $sql = "INSERT INTO products(name,price,description,image,category,stock)
            VALUES('$name','$price','$description','$image','$category','$stock')";

    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Product Added Successfully');</script>";
    }else{
        echo "<script>alert('Error');</script>";
    }
}
?>
!DOCTYPE html>
<html>
<head>
    <title>Add Product - BuyNest</title>
    <style>
        body{
            font-family:Arial;
            background:#f4f4f4;
        }

        .container{
            width:500px;
            margin:40px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        h2{
            text-align:center;
        }

        input,textarea,select{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            width:100%;
            padding:12px;
            background:#007bff;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#0056b3;
        }
    </style>
</head>

<body>

<div class="container">

<h2>Add Product</h2>

<form action="" method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Product Name" required>

<input type="number" name="price" placeholder="Price" required>

<input type="text" name="category" placeholder="Category" required>

<textarea name="description" placeholder="Description"></textarea>

<input type="file" name="image" required>

<input type="number" name="stock" placeholder="Stock" required>

<button type="submit" name="submit">Add Product</button>
</form>

</div>

</body>
</html>