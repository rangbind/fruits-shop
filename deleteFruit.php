<?php 
include('config/connection.php');

if(!empty($_GET['fruit_id'])){
	
	echo $fruit_id = $_GET['fruit_id'];
	
	$selectQuery="select * from fruit_master where fruit_id='$fruit_id'";
	
		
}
?>
