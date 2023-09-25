<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/adminsignup.css">
	<script type="text/javascript" src="validate.js"></script>
	<title>Join</title>
</head>
<body>
	<form action="adminsignupauth.php" method="post">
	<div class="form-box">
		<span class="title">Join</span>
		<span class="subtitle">All Football</span>
		<div class="form-container">

			<input type="text" name="uname" id="uname" class="input" placeholder="Username" onkeyup="namevalid()" required>
			<p id="nm" style="color: red;"></p>

			<input type="email" class="input" id="emailInput" placeholder="Email" name="email">
			<span id="emailError" class="error"></span>

			<input type="password" class="input" id="passwordInput" placeholder="Password" name="password">
			<span id="passwordError" class="error"></span>

			<input type="password" class="input" id="confirmPasswordInput" placeholder="Confirm Password" name="cpassword">
			<span id="confirmPasswordError" class="error"></span>
		</div>
		
		<button type="submit" name="submit">Sign Up</button>
	</form>
	<div class="form-section">
		<p>Already have an account? <a href="signin.php">Sign In</a> </p>
	</div>
	</div>

	<!-- ... previous HTML code ... -->

	<script>
		function validateForm() {
			event.preventDefault(); // Prevent form submission

			var username = document.getElementById('usernameInput').value;
			var password = document.getElementById('passwordInput').value;
			var usernameError = document.getElementById('usernameError');
			var passwordError = document.getElementById('passwordError');

			// Reset error messages
			usernameError.textContent = '';
			passwordError.textContent = '';

			// Regular expressions for validation
			var usernameRegex = /^[a-zA-Z0-9]{4,12}$/;
			var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

			var errors = []; // Array to collect errors

			if (!usernameRegex.test(username)) {
				errors.push({ field: 'username', message: 'Username must be 4-12 characters long and can only contain letters and numbers.' });
			}

			if (!passwordRegex.test(password)) {
				errors.push({ field: 'password', message: 'Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, and one digit.' });
			}

			if (username === '') {
				errors.push({ field: 'username', message: 'Please enter a valid Username.' });
			}

			if (password === '') {
				errors.push({ field: 'password', message: 'Please enter a valid password.' });
			}

			if (errors.length > 0) {
				// Display error messages for respective fields
				errors.forEach(function (error) {
					if (error.field === 'username') {
						usernameError.textContent = error.message;
					} else if (error.field === 'password') {
						passwordError.textContent = error.message;
					}
				});
				return false;
			}

			console.log('Form submitted successfully!');
			alert('Form submitted');
			document.querySelector('.form').submit();
		}
	</script>

</body>
</html>
