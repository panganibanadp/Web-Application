<?php 

	include ('../app/config.php');
	include ('../app/controller.php');

	$address = $_POST['address'];

	if($address == "registration_form") {
		$registration_controller -> register($_POST);
	}if($address == "login_form") {
		$login_controller -> login_try($_POST);
	}else {
		print "404 not found!";
	}


 ?>