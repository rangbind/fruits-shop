<?php

// Create connection
$mysqli = new mysqli('127.0.0.1', 'rang', 'Rbind403@', 'fruit-shop');

// Check connection
if($mysqli->connect_errno ) {
	printf("connect failed: %s<br />", $mysqli->connect_error);
	exit();
}

?>
