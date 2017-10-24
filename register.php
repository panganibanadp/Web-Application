<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<div class="header">
<h2> <center> REGISTRATION FORM </center></h2> </div>
    <div class="fill">
	<form action="../app/route.php" method="post">
		<input type="hidden" name="address" value="registration_form">
		<label>First Name: </label><br>
		<input type="text" name="first_name" placeholder="First Name" required="true">
		<br>
		<label>Last Name: </label><br>
		<input type="text" name="last_name" placeholder="Last Name" required="true">
		<br>
		<label>Username: </label><br>
		<input type="text" name="username" placeholder="Username" required="true">
		<br>
		<label>Password: </label><br>
		<input type="password" name="password" placeholder="Password" required="true">
		<center> <button type="submit">Register</button> 
		<div class="member">  Already a member? </div> <a href="../index.php">Login</a> 

	</form>
	<div class="comment">
	<?php session_start(); ?>

	<?php if(!empty($_SESSION['flash_message'])): ?>
	<div class="center">
		<?php print $_SESSION['flash_message']; ?>
		<?php $_SESSION['flash_message'] = ""; ?>
	</div>
	<?php endif; ?>
	</div>
	</div>
</body>
</html>