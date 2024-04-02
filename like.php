<?php

// include connection.php
include("connection.php");

$kata_kunci = "ayam";

// Query
$sql = "SELECT * FROM products WHERE name LIKE '%$kata_kunci%'";

// Mengeksekusi query
$result = mysqli_query($conn, $sql);

// Mengecek hasil query
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. " - Category: " . $row["categiry"]. "<br>";
    }
} else {
    echo "0 results";
}