<?php 
include('config/connection.php');

if(!empty($_POST['fruit_name']) && !empty($_POST['price']) && !empty($_POST['quantity'])){
	
	$fruit_name = $_POST['fruit_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];


	//select where fruit_name = fruit name 
	$selectQuery = "INSERT INTO fruit_master(fruit_name, price, quantity) values('$fruit_name', '$price', '$quantity')";
	
	$result = $mysqli->query($selectQuery);
	$insert_id = $mysqli->insert_id;

	if($insert_id>0){
		header("location:dashboard.php");
	}else{
		echo "wrong query";
	}
}else{
	//echo "dont get data";
}

?>