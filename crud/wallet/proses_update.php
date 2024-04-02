<?php

// include koneksi.php
include("../koneksi.php");

// define variables
$id = $_POST['id'];
$saldo = $_POST['saldo'];
$user_id = $_POST['user_id'];

// query
$sql = "UPDATE wallets SET saldo='$saldo', id_user='$user_id' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    // redirect ke index.php
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}