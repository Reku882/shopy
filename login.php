<?php include 'server.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="GET">
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name= "username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name= "password">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name= "email">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
    </form>
</body>
</html>