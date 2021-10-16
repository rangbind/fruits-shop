<?php
	include('header.php');
?>

<h3>Add Fruit</h3>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="addFruits.php">
			<label>Fruit Name:</label>
			<input type="text" class="form-control" name="fruit_name" placeholder="Fruit Name" required="true">	
				
			<label>Price:</label>
			<input type="text" class="form-control" name="price" placeholder="Price" required="true">
			

			<label>Quantity:</label>		
			<input type="text" class="form-control" name="quantity" placeholder="Quantity" required="true">
			
			<br>
			<button class="btn btn-primary" type="submit" name="submit">Submit</button>
			
		</form>
	</div>	
</div>


