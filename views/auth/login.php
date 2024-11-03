<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <link rel="stylesheet" href="../../assets/css/media.css">
</head>

<body>
    <div class="login-container">
        <h1>Login to Your Account</h1>
        <form id="loginForm" method="post" action="../../controller/AuthController.php">
            <div class="input-container">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Email..." name="email">
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" placeholder="Password..." name="password">
                    <span class="toggle-password">&#128065;</span>
                </div>
            </div>
            <button type="submit" class="login-button">Login</button>
            <a href="register.php" class="register-link">Register Here</a>
        </form>
        </div>
    <div id="snackbar"></div>

    <script>
        // document.getElementById('loginForm').addEventListener('submit', function(event) {
        //     event.preventDefault();
        //     var email = document.getElementById('email').value;
        //     var password = document.getElementById('password').value;
        //     if (email && password) {
        //         var snackbar = document.getElementById('snackbar');
        //         snackbar.textContent = 'Login successfully: ' + email;
        //         snackbar.className = 'show';
        //         setTimeout(function() {
        //             snackbar.className = snackbar.className.replace('show', '');
        //         }, 3000);
        //     } else {
        //         var snackbar = document.getElementById('snackbar');
        //         snackbar.textContent = 'Please fill in both email and password!';
        //         snackbar.className = 'show';
        //         setTimeout(function() {
        //             snackbar.className = snackbar.className.replace('show', '');
        //         }, 3000);
        //     }
        // });
    </script>
</body>

</html>
