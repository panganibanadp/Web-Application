<?php 

	$login_controller = new controller;
	$registration_controller = new controller;

	class controller {

		public function register($post_data) {
			
			include ('../app/config.php');

			$firstname = $post_data['first_name'];
			$lastname = $post_data['last_name'];
			$username = $post_data['username'];
			$password = $post_data['password'];

			$sql_query = $connection -> prepare("INSERT INTO users(username, password, first_name, last_name) VALUE('$username', '$password', '$firstname', '$lastname')");
			$sql_query -> execute();

			session_start();

			$_SESSION['flash_message'] = $firstname . " is registered successfully! Login now!";

			header("Location: ../html/register.php");

		}

		public function login_try($post_data) {

			include ('../app/config.php');

			$username = $post_data['username'];
			$password = $post_data['password'];

			$sql_query = $connection -> prepare("SELECT id FROM users where username = '$username' AND password = '$password'");
 			$sql_query -> execute();
			$result = $sql_query -> fetch();

			if(!empty($result)) {

				$sql_query = $connection -> prepare("SELECT * FROM users where username = '$username' AND password = '$password'");
	 			$sql_query -> execute();
				$result = $sql_query -> fetch();

				session_start();

				$_SESSION['firstname'] = $result['first_name'];
				$_SESSION['lastname'] = $result['last_name'];
				
				header("Location: ../html/dashboard.php");

			}else {
				
				session_start();

				$_SESSION['flash_message'] = "Wrong Username or Password!";

				header("Location: ../index.php");

			}

		}

	}

 ?>