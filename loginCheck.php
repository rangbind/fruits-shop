<?php
include('config/connection.php');

if(!empty($_POST['fruit_name']) && !empty($_POST['price']) && !empty($_POST['quantity'])){
	
	$username = $_POST['fruit_name'];
	$password = $_POST['price'];
	$password = $_POST['quantity'];


	$selectQuery = "select * from fruit_master where fruit_name='$fruit_name' and price='$price' and quantity=$quantity";
	$result = $mysqli->query($selectQuery);
	
	$count = mysqli_num_rows($result);

	if($count > 0){
		header("location:dashboard.php");
	}else{
		echo "wrong query";
	}
}

?>
