<?php
include('config/connection.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];



	$selectQuery = "select * from user where email='$username' and password='$password';";
	
	$result = $mysqli->query($selectQuery);
	$row = mysqli_fetch_array($result);
	
	$count = mysqli_num_rows($result);

	if($count > 0){
		//set session here
		session_start();
		$_SESSION['user_id'] = $row[0];
		header("location:dashboard.php");
	}else{
		echo "invailid username or password";
	}
}

?>