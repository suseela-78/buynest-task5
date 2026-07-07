<?php

$conn = mysqli_connect(
    "sql302.infinityfree.com",
    "if0_42344140",
    "QMCcavdHAF6kM4",
    "if0_42344140_buynest_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>