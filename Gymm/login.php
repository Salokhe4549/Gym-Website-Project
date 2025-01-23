<?php
ini_set('display_errors',1);
    include('common_setting.php');
?>    


<html>
<head>
	<title>Gym Website Login Page</title>
	<link rel="stylesheet" type="text/css" href="css\loginstyle.css">
	<style></style>
</head>
<body>
	<div class="container">
		<h1>Welcome Back</h1>
		
		
		<form action="<?php echo $url; ?>login_auth.php" method="POST" >
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<button type="submit">Log In</button>
			
		</form>
		<div class="form-footer">
			
			<p>Don't have an account? <a href="signup.php">Sign Up Here</a></p>
		</div>
	</div>
</body>
</html>
