<?php

// include connection.php
include("connection.php");

$name = "Rudiansyah";
$email = "rudi@gmail.com";
$username = "rudi";

// Query
$sql = "INSERT INTO users (name, email, username) VALUES ('$name', '$email', '$username')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}