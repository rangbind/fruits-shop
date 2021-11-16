<?php 

	include('config/connection.php');



	if(!empty($_POST['account_id'])){
	
	$account_id = $_POST['account_id'];
	//$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];

	$selectQuery = "UPDATE user SET phone='$phone', email='$email', address='$address', password='$password', role='$Role' WHERE id='$account_id'";
		
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:accountList.php");
	}
}
	
?>
		