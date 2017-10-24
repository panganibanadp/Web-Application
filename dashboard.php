<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
</head>
<body>

<?php session_start(); ?>

<div class="hello">
	<h1> Hello! <?php print $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></h1>
	<a href="logout.php">Logout</a>
</div>

</body>
</html>