<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Table Product</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Table Product</h2>
        <a href="create.php" class="btn btn-primary">Create Product</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // include koneksi.php
                include("../koneksi.php");

                // select data
                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['categiry'] . "</td>";
                        echo "<td>" . $row['stock'] . "</td>";
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $row['ID'] . "' class='btn btn-info'>Edit</a> ";
                        echo "<a href='proses_delete.php?id=" . $row['ID'] . "' class='btn btn-danger'>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>