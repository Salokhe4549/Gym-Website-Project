<?php
ini_set('display_errors', 1);
session_start();
include('common_setting.php');
?>
<html>
<head>
	<title>Gym Website Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="css\signupstyle.css">
</head>
<body>
	<div class="container">
		<h1>Join Our Gym</h1>

		<form action="<?php echo $url; ?>reg.php" method="POST">

			<label for="name">Full Name</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" required>
		    <label for="password">Create Password</label>
			<input type="password" id="password" name="password" required>
			<label for="phone">Phone Number</label>
			<input type="text" id="phone" name="phone" required>
			<label >Select Package</label>
			<select  name="package" required>
				<option value="Strength Training 599">Strength Training (599 Rs)</option>
				<option value="Cardiovascular Training 799">Cardiovascular Training (799 Rs)</option>
				<option value="High Interval Training 999">High--Intensity Interval Training (999 Rs)</option>
			</select>
			
			<label for="name">Start Date </label>
			<input type="Date" id="name" name="startdate" required>
             <br><br>
			<label >Time Schedule</label>
			<select  name="time" required>
				<option value="6-7 AM">6-7 AM</option>
				<option value="7-8 AM">7-8 AM</option>
				<option value="8-9 AM">8-9 AM</option>
				<option value="6-7 PM">6-7 PM</option>
				<option value="7-8 PM">7-8 PM</option>
				<option value="8-9 PM">8-9 PM</option>
			</select>

			<br><br>
			<button type="submit">Sign Up</button>


		</form>
		<div class="form-footer">
			<a href="login.php">Already a member? Log in here</a>
		
		</div>
	</div>
	

	
</body>

</html>