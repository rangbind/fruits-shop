<?php
include('connection.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$selectQuery = "select * from user where email_id='$username' and password='$password'";
	// exit;
	$result = $mysqli->query($selectQuery);

	$count = mysqli_num_rows($result);

	if($count > 0){
		echo "login succesfull";
	}else{
		// http_redirect();
	}
}

?>