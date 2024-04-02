<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "mysql_fundamental";

// Membuat koneksi 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}