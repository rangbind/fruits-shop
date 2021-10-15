<?php
	include('config/connection.php');

	$selectquery = "select * from fruit_master";
	$result = $mysqli->query($selectquery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home:Fruits-Shop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
	<h3>Fruit List</h3>
	<table class="table table-hover" style="width: 50%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Fruit name</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Created At</th>
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
				<td><?php echo $value['created_at']; ?></td>
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
			</tr>
			
			
		</tbody>
	</table>
</body>
</html>	