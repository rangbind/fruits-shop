<?php
	include('header.php');

	$selectquery = "select * from fruit_master";
	$result = $mysqli->query($selectquery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
?>
<h3>Fruit List</h3>
<table class="table table-hover" style="width: 80%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Fruit name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Image</th>
			<th>Created At</th>
			<th>Action</th>
		</tr>

	</thead>
	<tbody>
		
		<?php

		$price_sum = 0;
		$quantity_sum = 0;

		foreach ($dataArray as $key => $value) {

			$price_sum = $price_sum + $value['price'];
			$quantity_sum = $quantity_sum + $value['quantity'];

		?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['fruit_name']; ?></td>
			<td><?php echo $value['price']; ?></td>
			<td><?php echo $value['quantity']; ?></td>
			<td><?php echo $value['image']; ?></td>
			<td><?php echo $value['created_at']; ?></td>
			<td>
					
			<td> 
				<a class="btn btn-outline-danger" href="deleteFruit.php?fruit_id=<?php echo $value['id'];?>" id="fruit_id"> delete </a> <a class="btn btn-primary" href="editfruitview.php?fruit_id=<?php echo $value['id'];?>" id="fruit_id"> edit </a>
			</td> 
			
		</tr>

		<?php	
		}
		?>

		<tr>
			<th> <?php echo "total"; ?> </th>
			<th> <?php echo count($dataArray); ?> </th>
			<th> <?php echo $price_sum; ?> </th>
			<th> <?php echo $quantity_sum; ?> </th>
			<th></th>
			<th></th>
			<th></th>

		</tr>
	</tbody>
</table>
