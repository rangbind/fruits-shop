<?php 
include('config/connection.php');

if(!empty($_POST['fruit_name']) && !empty($_POST['price']) && !empty($_POST['quantity'])  && !empty($_FILES['image'])){
	$fruit_name = $_POST['fruit_name'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];

	$file_tmp =$_FILES['image']['tmp_name'];
    $file_name =$_FILES['image']['name'];
    $file_ext = strtolower(end(explode('.',$file_name)));

    $file_name_new = date('Ymdhis').'.'.$file_ext;
	
    //checking fruit already availanle or not
    $sql = "SELECT * FROM fruit_master WHERE fruit_name = '$fruit_name'";
    $res = $mysqli->query($sql);
    $num = mysqli_num_rows($res);
    //end of check
    
    if($num > 0){
    	echo "This fruit is already available";
    }else{

		//Moving file to folder
		$isUploaded = move_uploaded_file($file_tmp,"pics/".$file_name_new);
		//End of moving file

		//select where fruit_name = fruit name 
		$selectQuery = "INSERT INTO fruit_master(fruit_name, price, quantity, image) values('$fruit_name', '$price', '$quantity', '$file_name_new')";
		
		$result = $mysqli->query($selectQuery);
		$insert_id = $mysqli->insert_id;

		if($insert_id>0){
			header("location:dashboard.php");
		}else{
			echo "Something went wrong, enable to add fruit";
		}
    }

}

?>