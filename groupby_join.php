<?php

// include connection.php
include("connection.php");

$sql = "SELECT users.name AS 'user_name', COUNT(orders.id) AS 'total' FROM users JOIN orders ON users.id = orders.id_user GROUP BY users.id";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "User Name: " . $row["user_name"]. " - Total Orders: " . $row["total"]. "<br>";
    }
} else {
    echo "0 results";
}