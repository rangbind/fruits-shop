<?php 
include('config/connection.php');

if(!empty($_GET['fruit_id'])){
	
	$fruit_id = $_GET['fruit_id'];
	
	//echo $fruit_id;

	$selectQuery = "DELETE FROM fruit_master WHERE id='$fruit_id'";
	$result = $mysqli->query($selectQuery);

	if($result){
		//echo "delete successfully";
		header("location:dashboard.php");
	}else{
		die(mysql_error($connection));
	}
}
	

?>
	

	
	