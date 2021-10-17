<?php 
include('config/connection.php');

if(!empty($_GET['fruit_id'])){
	
	echo $fruit_id = $_GET['fruit_id'];
	
}

?>
$selectQuery = "SELECT * FROM fruit_master(fruit_name, price, quantity) values('$fruit_name', '$price', '$quantity')";