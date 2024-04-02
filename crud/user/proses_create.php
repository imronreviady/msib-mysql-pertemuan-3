<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];


// query
$sql = "INSERT INTO users (name, email, username) VALUES ('$name', '$email', '$username')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}