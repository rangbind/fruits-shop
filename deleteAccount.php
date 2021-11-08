<?php 
include('config/connection.php');

if(!empty($_GET['account_id'])){
	
	$account_id = $_GET['account_id'];
	
	//echo $fruit_id;

	$selectQuery = "DELETE FROM Registration_page WHERE id='$account_id'";
	$result = $mysqli->query($selectQuery);

	if($result){
		//echo "delete successfully";
		header("location:accountList.php");
	}else{
		die(mysql_error($connection));
	}
}
	

?>
		