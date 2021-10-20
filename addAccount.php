<?php 
include('config/connection.php');

if(!empty($_POST['name']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['confirmed_password'])){
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];



	//select where fruit_name = fruit name 
	$selectQuery = "INSERT INTO Registration_page(name, phone_no, email, address, password, confirmed_password) values('$name', '$phone_no', '$email', '$address', '$password', '$confirmed_password')";
	
	$result = $mysqli->query($selectQuery);
	$insert_id = $mysqli->insert_id;

	if($insert_id>0){
		header("location:accountList.php");
	}else{
		echo "wrong query";
	}
}else{
	//echo "dont get data";
}

?>