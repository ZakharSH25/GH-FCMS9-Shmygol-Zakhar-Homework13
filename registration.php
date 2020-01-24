<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="registration-block">
    <h1 class="registration-title">Registration</h1>
    <form action="submit-registration.php" class="registration-form" method="post">
        <input type="text" placeholder="Username" class="registration-input" name="username">
        <input type="email" placeholder="Email" class="registration-input" name="email">
        <input type="password" placeholder="Password" class="registration-input" name="password">
        <input type="password" placeholder="Repeat password" class="registration-input" name="repeat_password">
        <input type="text" placeholder="First Name" class="registration-input" name="first_name">
        <input type="text" placeholder="Last Name" class="registration-input" name="last_name">
        <input type="text" placeholder="Age" class="registration-input" name="age">
        <p>Choose your gender</p>
        <label>
            <input type="radio" name="gender" value="0">
            Men
        </label>
        <label>
            <input type="radio" name="gender" value="1">
            Women
        </label>
        <button type="submit" class="registration-submit">Submit</button>
    </form>
        <a href="index.php" class="registration-button">Main</a>
</div>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
