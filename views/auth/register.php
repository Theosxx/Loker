<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/register.css">
    <link rel="stylesheet" href="../../assets/css/media.css">
</head>

<body>
    <div class="register-container">
        <h1>Register to Your Account</h1>
        <form action="../../controller/auth/Register-users.php" method="post">
            <div class="input-container">
                <label for="name">Username</label>
                <input type="text" id="username" name="name" placeholder="name...">
            </div>
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email...">
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password...">
            </div>
            <button type="submit" name="register" class="register-button">Register</button>
            <a href="login.php" class="register-link">Login Page</a>
        </form>
    </div>
</body>

</html>
