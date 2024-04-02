<?php
// include koneksi.php

include("../koneksi.php");

$id = $_GET['id'];

// select data
$sql = "SELECT * FROM wallets WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$sqlUser = "SELECT * FROM users";
$resultUser = mysqli_query($conn, $sqlUser);

$rowUser = mysqli_fetch_assoc($resultUser);

// debug
// var_dump($rowUser);

// close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Edit Wallet</title>

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
                <label>Saldo:</label>
                <input type="number" class="form-control" name="saldo" value="<?php echo $row['saldo']; ?>">
            </div>
            <div class="form-group">
                <label>User:</label>
                <select class="form-control" name="user_id" value="<?php echo $row['id_user']; ?>">
                    <?php
                    if (mysqli_num_rows($resultUser) > 0) {
                        while($rowUser = mysqli_fetch_assoc($resultUser)) {
                            echo "<option value='" . $rowUser['id'] . "'>" . $rowUser['name'] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No User</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>