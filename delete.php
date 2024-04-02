<?php

// include connection.php
include("connection.php");

$id = 9;

// Query
$sql = "DELETE FROM users WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}