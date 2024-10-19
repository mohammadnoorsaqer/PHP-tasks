<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Login</title>
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form method="POST" action="admin_login_action.php">
            <div class="form-group">
                <label for="admin_email">Email:</label>
                <input type="email" class="form-control" id="admin_email" name="admin_email" required>
            </div>
            <div class="form-group">
                <label for="admin_password">Password:</label>
                <input type="password" class="form-control" id="admin_password" name="admin_password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
