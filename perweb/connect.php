<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'personal_website';

	// Create a connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "Connection failed! ".$conn->connect_error;
	}
 ?>