<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo isset($_SESSION["username"]) ? $_SESSION["username"] : "Guest"; ?>!</h2>
    <p>You have successfully logged in.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
