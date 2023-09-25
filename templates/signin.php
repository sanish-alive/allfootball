<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/signin.css">
    <style>
       
    </style>
    <script src="Validate.js"></script>
    <title>SignIn</title>
</head>
<body>
    <div class="form-box" id="signin-form">
        <form class="form" action="signinauth.php" method="post">
            <span class="title">Sign In</span>
            <span class="subtitle">All Football</span>
            <div class="form-container">
                <input type="text" id="usernameInput" class="input" placeholder="Username" name="uname">
                <div id="usernameError" class="error"></div>
                <div class="password-container">
                    <input type="password" id="passwordInput" class="input" placeholder="Password" name="password">
                    <!-- Add the eye button for password toggle -->
                    <button type="button" id="togglePassword" class="eye-button" onclick="togglePasswordVisibility()">&#x1f441;</button>
                </div>
                <div id="passwordError" class="error"></div>
            </div>
            <button onclick="validateForm()">Sign In</button>
        </form>
        <div class="form-section">
            <p>Don't have an account? <a href="signup.php">Join</a> </p>
        </div>
        <div class="signimg">
            <img src="../HD-wallpaper-football-field-abstract-art-football-stadium-soccer-stadium-football-stands-thumbnail.jpg"
                alt="">
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('passwordInput');
            const toggleButton = document.getElementById('togglePassword');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = '🙈'; // Change to an eye-crossed emoji
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = '👁️'; // Change to an open eye emoji
            }
        }
    </script>
</body>
</html>
