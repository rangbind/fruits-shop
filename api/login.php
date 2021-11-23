<?php 
	include '../config/connection.php';

	$request = json_decode(file_get_contents('php://input'), 1);

	if(!empty($request['username']) && !empty($request['password'])){
	
		$username = $request['username'];
		$password = $request['password'];



		$selectQuery = "select * from user where email='$username' and password='$password';";
		
		$result = $mysqli->query($selectQuery);
		$row = mysqli_fetch_array($result);
		
		$count = mysqli_num_rows($result);

		$responseArray = [];
		if($count > 0){
			$responseArray = ['status'=>200,'token'=>md5($request['username'])];
		}else{
			$responseArray = ['status'=>401,'message'=>'Invailid username or password'];
		}
	}else{
		$responseArray = ['status'=>422,'message'=>'Please provide username and password'];
	}

	echo json_encode($responseArray);

?>