<?php
// include koneksi.php

include("../koneksi.php");

$id = $_GET['id'];

// select data
$sql = "SELECT * FROM products WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

// close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Edit Product</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Edit Product</h2>
        <form method="post" action="proses_update.php">
            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control" name="description"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label>Category:</label>
                <select class="form-control" name="category">
                    <option value="makanan" <?php if($row['categiry'] == 'makanan') echo 'selected'; ?>>Makanan</option>
                    <option value="minuman" <?php if($row['categiry'] == 'minuman') echo 'selected'; ?>>Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label>Stock:</label>
                <input type="number" class="form-control" name="stock" value="<?php echo $row['stock']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>