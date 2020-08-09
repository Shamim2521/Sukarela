<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
	
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form action="process.php" method="post">
			<h1>Sign in</h1>
			
			<input type="text" placeholder="Name" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
			
			</div>
		</div>
	</div>
</div>

<script src="script.js"></script>

</body>
</html>