<?php

// Create connection
$mysqli = new mysqli('127.0.0.1', 'sulo', 'Sulo@123', 'collage');

// Check connection
if($mysqli->connect_errno ) {
	printf("connect failed: %s<br />", $mysqli->connect_error);
	exit();
}

 ?>