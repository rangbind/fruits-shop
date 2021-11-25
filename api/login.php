<?php
	include '../config/connection.php';
	include '../config/tokenWork.php';

	$request =  getRequestData();
	
	if(!empty($request['username']) && !empty($request['password'])){
	
		$username = $request['username'];
		$password = $request['password'];

		$selectQuery = "select * from user where email='$username' and password='$password';";
		
		$result = $mysqli->query($selectQuery);
		$raw = mysqli_fetch_assoc($result);
		$count = mysqli_num_rows($result);
		$id = $raw['id'];

		$responseArray = [];
		if($count > 0){
			$token = encrypt(json_encode($raw), $key);
			//set token
			$up = "UPDATE user SET token = '$token' where id='$id'";
			$mysqli->query($up);

			sendResponse(200, ['token'=>$token]);
		}else{
			sendResponse(401, ['message'=>'Invailid username or password']);
		}
	}else{
		sendResponse(422, ['message'=>'Please provide username and password']);
	}

?>