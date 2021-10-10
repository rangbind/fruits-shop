<?php 
	
	include('connection.php');

	$selectquery = "select * from electronics";
	$result = $mysqli-> query($selectquery);

	$dataArray = [];
	echo "<pre>";
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
	
	print_r($dataArray);




 ?>