<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
		<div class="header">
		<h2> <center>LOGIN FORM</center></h2> </div>
	
	<div class="fill">
	
	<form action="app/route.php" method="post">
		<input type="hidden" name="address" value="login_form">
		<label>Username</label>
		<input type="text" name="username" placeholder="Username" required="true">
		<br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password" required="true">
	    </p> <center> <button type="submit">Login</button>
		  <p> <div class="member"> Not yet a member? </div>
		<a href="html/register.php">Register</a>
	</form> </center>
	<div class="comment">
	<?php session_start(); ?>

	<?php if(!empty($_SESSION['flash_message'])): ?>
	<div class="center">
		<?php print $_SESSION['flash_message']; ?>
		<?php $_SESSION['flash_message'] = ""; ?>
	</div> 
	<?php endif; ?>
	</div>

</body>
</html>