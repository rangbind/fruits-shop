<?php 
include('config/connection.php');

if(!empty($_POST['name']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['confirmed_password'])){
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];


	if($password != $confirmed_password){
		echo "Password and confirm password should be same";
		exit;
	}

	if($user != $user){
		echo "Check allready existing user";
		exit;
	}

	//check already acount available or not
	//1: select record from user table where email id is comming id
	//2: check if record found return error with user already exists
	//3: else register user


	$selectQuery = "INSERT INTO user (names, phone, email, address, password) VALUES('$name', '$phone_no', '$email', '$address', '$password')";
	
	$result = $mysqli->query($selectQuery);
	$insert_id = $mysqli->insert_id;

	if($insert_id > 0){
		header("location:accountList.php");

	}else{
		echo "wrong query";
	
	}
}

?>