<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="login-block">
    <h1 class="login-title">Login</h1>
    <form action="submit-login.php" method="post">
        <input type="text" placeholder="Login" class="login-input" name="username">
        <input type="password" placeholder="Password" class="login-input" name="password">
        <button type="submit" class="login-submit">Submit</button>
    </form>
    <a href="index.php" class="login-button">Main</a>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
