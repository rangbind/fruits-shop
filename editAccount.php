<?php 

	include('config/connection.php');



	if(!empty($_POST['account_id'])){
	
	$account_id = $_POST['account_id'];
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$confirmed_password = $_POST['confirmed_password'];
	$role = $_POST['role'];

	

	$selectQuery = "UPDATE user SET name='$name', phone_no='$phone_no', email='$email', address='$address', confirmed_password='$confirmed_password',role='$role' WHERE id='$account_id'";
	
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:accountList.php");
	}
}
	
?>
	