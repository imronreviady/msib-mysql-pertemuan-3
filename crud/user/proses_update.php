<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];

// query
$sql = "UPDATE users SET name='$name', email='$email', username='$username' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}