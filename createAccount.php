<?php
include('header.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];


	$selectQuery = "select * from user where email='$username' and password='$password';";
	
	$result = $mysqli->query($selectQuery);
	
	$count = mysqli_num_rows($result);

	if($count > 0){
		header("location:dashboard.php");
	}else{
		echo "invailid username or password";
	}
}

?>
