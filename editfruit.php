<?php 

	include('config/connection.php');



	if(!empty($_POST['fruit_id'])){
	
	$fruit_id = $_POST['fruit_id'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$image = $_POST['image'];

	

	$selectQuery = "UPDATE fruit_master SET price='$price', quantity='$quantity', image='$image' WHERE id='$fruit_id'";
	
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:dashboard.php");
	}
}
	
?>
	