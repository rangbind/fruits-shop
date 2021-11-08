<?php 
	
	/*include('config/connection.php');

	$selectquery = "select * from fruit_master";
	$result = $mysqli-> query($selectquery);

	$dataArray = [];
	echo "<pre>";
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
	
	print_r($dataArray);*/




	include('config/connection.php');

	$selectquery = "select * from Registration_page";
	$result = $mysqli-> query($selectquery);

	$dataArray = [];
	echo "<pre>";
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
	
	print_r($dataArray);




















 ?>