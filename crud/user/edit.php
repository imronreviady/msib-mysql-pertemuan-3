<?php
// include koneksi.php

include("../koneksi.php");

$id = $_GET['id'];

// select data
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

// close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Edit USER</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Edit USER</h2>
        <form method="post" action="proses_update.php">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>