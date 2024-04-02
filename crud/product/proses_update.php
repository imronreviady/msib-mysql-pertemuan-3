<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$stock = $_POST['stock'];

// query
$sql = "UPDATE products SET name='$name', price='$price', description='$description', categiry='$category', stock='$stock' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}