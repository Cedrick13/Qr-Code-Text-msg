<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<script src="darkmode.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

	<div class="container">
		<h1 class="label">User Login</h1>
		<form class="login_form" action="homepage.php" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email or Phone</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email or Phone</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button type="submit">Login</button>
			<i class="bi bi-brightness-high-fill" id="toggleDark"></i>
		</form>
	</div>	
	<script src="js/main.js"></script>
</body>
</html>