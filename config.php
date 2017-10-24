<?php 

	$database_type = "mysql";
	$host = "localhost";
	$database_username = "root";
	$database_password = "dbms";
	$database_name = "finals_sample";

	$connection = new PDO("$database_type:host=$host;dbname=$database_name", $database_username, $database_password);

 ?>