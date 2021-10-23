<?php
/*include('config/connection.php');

if(!empty($_POST['username']) && !empty($_POST['password'])){
	
	$username = $_POST['username'];
	$password = $_POST['password'];



	$selectQuery = "select * from user where email='$username' and password='$password';";
	
	$result = $mysqli->query($selectQuery);
	
	$count = mysqli_num_rows($result);

	if($count > 0){
		header("location:dashboard.php");
	}else{
		echo "invailid username or password";
	}
}*/

?>


<?php
include('config/connection.php');

if(!empty($_POST['name']) && !empty($_POST['phone_no']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['password']) && !empty($_POST['confirmed_password'])){
	
	$name = $_POST['name'];
	$phone_no = $_POST['phone_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$password = $_POST['password'];
	$confirmed_password = $_POST['confirmed_password'];


	$selectQuery = "SELECT * FROM Registration_page WHERE name='$name', phone_no='$phone_no', email='$email', address='$address', confirmed_password='$confirmed_password';";
	
	$result = $mysqli->query($selectQuery);
	
	$count = mysqli_num_rows($result);

	if($count > 0){
		header("location:accountList.php");
	}else{
		echo "invailid";
	}
}

?>