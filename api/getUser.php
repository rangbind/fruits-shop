<?php
	include '../config/connection.php';
	include '../config/tokenWork.php';	

	$request =  getRequestData();

	if(!empty($request['token'])){
		$userDetails = json_decode(decrypt($request['token'], $key), 1);
		sendResponse(200, $userDetails);	
	}else{
		sendResponse(401, ['message'=>'Please login']);
	}


?>