<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create Product</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Create Product</h2>
        <form method="post" action="proses_create.php">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Price:</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Category:</label>
                <select class="form-control" name="category">
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group">
                <label>Stock:</label>
                <input type="number" class="form-control" name="stock">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>