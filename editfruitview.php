<?php 
include('header.php');

if(!empty($_GET['fruit_id'])){
	
	 $fruit_id = $_GET['fruit_id'];
	
	$selectQuery = "SELECT * FROM fruit_master WHERE id=$fruit_id";
	$result = $mysqli->query($selectQuery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc ($result)) {
		$dataArray[] = $row;
	}
	
}
	
?>

	<h3>Edit Fruit</h3>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="editfruit.php" enctype="multipart/form-data">

			<input type="hidden" name="fruit_id" value="<?php echo $fruit_id;?>">
			<label>Fruit Name:</label>
			<input value="<?php echo $dataArray[0]['fruit_name'] ?>" type="text" class="form-control" name="fruit_name" placeholder="Fruit Name" required="true" readonly="true">	
				
			<label>Price:</label>
			<input value="<?php echo $dataArray[0]['price'] ?>" type="text" class="form-control" name="price" placeholder="Price" required="true"> 
			
			<label>Quantity:</label>		
			<input value="<?php echo $dataArray[0]['quantity'] ?>" type="text" class="form-control" name="quantity" placeholder="Quantity" required="true">
			<br>
			<img class="form-control" style="width:30%" src="<?php echo "pics/".$dataArray[0]['image']; ?>" width="80px">
			<label>Image:</label>
			<input value="<?php echo $dataArray[0]['image'] ?>" type="file" name="image" class="form-control" placeholder="image">

			<br>
			<button class="btn btn-primary" type="submit" name="submit">Submit</button>
			
		</form>
	</div>	
</div>
