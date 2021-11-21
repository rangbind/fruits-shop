<?php 
include('config/connection.php');

if(!empty($_POST['names']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['confirmed_password']) && !empty($_FILES['image'])){
	
	$names = $_POST['names'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirm_password'];
	$file_tmp =$_FILES['image']['tmp_name'];
    $file_name =$_FILES['image']['name'];
    $file_ext = strtolower(end(explode('.',$file_name)));

    $file_name_new = date('Ymdhis').'.'.$file_ext;
	
    //checking fruit already availanle or not
    $sql = "SELECT * FROM user WHERE Account_name = '$Account_name'";
    $res = $mysqli->query($sql);
    $num = mysqli_num_rows($res);
    //end of check
    
    if($num > 0){
    	echo "This Account is already available";
    }else{

		//Moving file to folder
		$isUploaded = move_uploaded_file($file_tmp,"pics/".$file_name_new);
		//End of moving file

		//echo "<img src='$file_name_new' height='100' width='100'/>";

		//select where Account_name = Account name 



	if($password != $confirmed_password){
		echo "Password and confirm password should be same";
		exit;
	}

	if($user != $user){
		echo "Check allready existing user";
		exit;
	}

	//check already acount available or not
	//1: select record from user table where email id is comming id
	//2: check if record found return error with user already exists
	//3: else register user
	$selectQuery = "INSERT INTO user (names, phone, email, address, password, role) VALUES('$names', '$phone', '$email', '$address', '$password','$file_name_new')";
	
	$result = $mysqli->query($selectQuery);
	$insert_id = $mysqli->insert_id;

	if($insert_id > 0){
		header("location:accountList.php");

	}else{
		echo "wrong query";
	
	}
}

?>