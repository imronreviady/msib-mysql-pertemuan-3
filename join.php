<?php

// include connection.php
include("connection.php");

// Query
$sql = "SELECT users.id, users.name, orders.order_date, orders.quantity FROM users INNER JOIN orders ON users.id = orders.id_user";

// Mengeksekusi query
$result = mysqli_query($conn, $sql);

// Mengecek hasil query
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Order Date: " . $row["order_date"]. " - Quantity: " . $row["quantity"]. "<br>";
    }
} else {
    echo "0 results";
}