<?php

// include connection.php
include("connection.php");

$id = 6;
$name = "Rudiansyah";
$email = "rudi@gmail.com";
$username = "rudi";

// Query
$sql = "UPDATE users SET name='$name', email='$email', username='$username' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}