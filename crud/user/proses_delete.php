<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$id = $_GET['id'];

// query
$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // echo "Record deleted successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}