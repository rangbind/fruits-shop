<?php 

	include('config/connection.php');



	if(!empty($_POST['account_id'])){
	
	$account_id = $_POST['account_id'];
	//$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['Address'];
	$password = $_POST['password'];

	$selectQuery = "UPDATE user SET phone_no='$phone_no', email='$email', Address='$address', password='$password' WHERE id='$account_id'";
	
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:accountList.php");
	}
}
	
?>
		