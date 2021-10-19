<?php 

	include('config/connection.php');



	if(!empty($_POST['account_id'])){
	
	$account_id = $_POST['account_id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$confirmed_password = $_POST['confirmed_password'];



	$selectQuery = "UPDATE registration_page SET name='$name', phone='$phone', email='$email', address='$address, confirmed_password='$confirmed_password', WHERE id='$account_id'";
	
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:dashboard.php");
	}
}
	
?>
	