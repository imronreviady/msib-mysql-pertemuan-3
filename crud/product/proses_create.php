<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$category = $_POST['category'];
$stock = $_POST['stock'];


// query
$sql = "INSERT INTO products (name, price, description, categiry, stock) VALUES ('$name', '$price', '$description', '$category', '$stock')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}