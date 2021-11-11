<?php 
include('config/connection.php');

if(!empty($_POST['name']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['confirmed_password'])){
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];
	$role = $_POST['role'];




	//select where fruit_name = fruit name 

	$selectQuery = "INSERT INTO user (name, phone_no, email, address, password, confirmed_password,role) VALUES('$name', '$phone_no', '$email', '$address', '$password', '$confirmed_password','$role')";
	
	$result = $mysqli->query($selectQuery);
	$insert_id = $mysqli->insert_id;

	echo($result);
	if($insert_id > 0){
		header("location:accountList.php");

	}else{
		echo "wrong query";
	
	}
}

?>