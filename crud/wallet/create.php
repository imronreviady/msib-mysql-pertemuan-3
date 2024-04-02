<?php
// include koneksi.php
include("../koneksi.php");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$rowUser = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create Wallet</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Create Walet</h2>
        <form method="post" action="proses_create.php">
            <div class="form-group">
                <label>Saldo:</label>
                <input type="number" class="form-control" name="saldo">
            </div>
            <div class="form-group">
                <label>User:</label>
                <select class="form-control" name="user_id">
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while($rowUser = mysqli_fetch_assoc($result)) {
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