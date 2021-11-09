
<?php
	// Database credentials
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'mydatabase');

	// Attempt to connect to MySQL database
	$con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$con) {
		die("Error: Unable to connect " . $con->connect_error);
	}

?>