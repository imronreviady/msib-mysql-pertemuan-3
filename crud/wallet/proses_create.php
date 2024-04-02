<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$saldo = $_POST['saldo'];
$user_id = $_POST['user_id'];


// query
$sql = "INSERT INTO wallets (saldo, id_user) VALUES ('$saldo', '$user_id')";

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}