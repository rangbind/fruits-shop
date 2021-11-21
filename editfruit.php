<?php 

	include('config/connection.php');



	if(!empty($_POST['fruit_id'])){
	
	$fruit_id = $_POST['fruit_id'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$image = $_POST['image'];

	$updateFile = '';
	if(!empty($_FILES['image'])){

		$file_tmp = $_FILES['image']['tmp_name'];
	    $file_name = $_FILES['image']['name'];
	    $file_ext = strtolower(end(explode('.',$file_name)));

	    $file_name_new = date('Ymdhis').'.'.$file_ext;
		//Moving file to folder
		$isUploaded = move_uploaded_file($file_tmp,"pics/".$file_name_new);
		//End of moving file
		$updateFile = ", image='$file_name_new'";
	}

	$selectQuery = "UPDATE fruit_master SET price='$price', quantity='$quantity' $updateFile WHERE id='$fruit_id'";
	
	$result = $mysqli->query($selectQuery);
	

	if($result){
		header("location:dashboard.php");
	}
}
	
?>
	