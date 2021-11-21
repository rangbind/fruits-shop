<?php 
include('header.php');

if(!empty($_GET['account_id'])){
	
	 $account_id = $_GET['account_id'];
	
	$selectQuery = "SELECT * FROM user WHERE id=$account_id";
	$result = $mysqli->query($selectQuery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc($result)) {

		$dataArray[] = $row;
	}
	/*echo "<pre>";
	print_r($dataArray);*/
}
	
?>

	<h3>Edit Account</h3>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="editfruit.php" enctype="multipart/form-data">

			<input type="hidden" name="account_id" value="<?php echo $account_id;?>">
			<label>Name:</label>
			
			<input value="<?php echo $dataArray[0]['names'] ?>" type="text" class="form-control" name="name" placeholder="name" required="true" readonly="true">	
				
			<label>Phone No:</label>
			<input value="<?php echo $dataArray[0]['phone'] ?>" type="text" class="form-control" name="phone_no" placeholder="phone_no" required="true"> 
			

			<label>Email:</label>		
			<input value="<?php echo $dataArray[0]['email'] ?>" type="text" class="form-control" name="email" placeholder="email" required="true">

			<label>Address:</label>		
			<input value="<?php echo $dataArray[0]['address'] ?>" type="text" class="form-control" name="address" placeholder="address" required="true">

			<label>Password:</label>		
			<input value="" type="text" class="form-control" name="password" placeholder="password" required="true">

			<label>Confirm Password:</label>		
			<input value="" type="text" class="form-control" name="confirmed_password" placeholder="confirmed_password" required="true">

			<label>Image:</label>
			<input  type="text" name="image" >		
			<input type="file" class="form-control" name="image" placeholder="image" required="true">

			<br>
			<button class="btn btn-primary" type="submit" name="submit">Submit</button>
			
		</form>
	</div>	
</div>