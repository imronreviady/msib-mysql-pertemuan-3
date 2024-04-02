<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Table Wallet</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Table Wallet</h2>
        <a href="create.php" class="btn btn-primary">Create Wallet</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Saldo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // include koneksi.php
                include("../koneksi.php");

                // select data
                $sql = "SELECT wallets.id AS 'id_wallet', users.name AS 'nama_user', wallets.saldo FROM wallets INNER JOIN users ON wallets.id_user = users.id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nama_user'] . "</td>";
                        echo "<td>" . $row['saldo'] . "</td>";
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $row['id_wallet'] . "' class='btn btn-info'>Edit</a> ";
                        echo "<a href='proses_delete.php?id=" . $row['id_wallet'] . "' class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>