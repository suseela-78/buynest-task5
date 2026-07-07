<?php
include("../db.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM products WHERE id='$id'");

echo "<script>alert('Product Deleted Successfully');</script>";

echo "<script>window.location='index.php';</script>";
?>