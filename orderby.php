<?php

// include connection.php
include("connection.php");

// Query
$sql = "SELECT * FROM products ORDER BY name ASC";

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