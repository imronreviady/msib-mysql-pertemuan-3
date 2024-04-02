<!DOCTYPE html>
<html>
<head>
    <title>CRUD - Create USER</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Create USER</h2>
        <form method="post" action="proses_create.php">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>