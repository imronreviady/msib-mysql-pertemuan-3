<?php

// include connection.php
include("connection.php");

// Query
$sql = "SELECT categiry FROM products GROUP BY categiry";

// Mengeksekusi query
$result = mysqli_query($conn, $sql);

// Mengecek hasil query
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Category: " . $row["categiry"]. "<br>";
    }
} else {
    echo "0 results";
}