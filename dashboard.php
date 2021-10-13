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
	<h3>Showing Electronic Details</h3>
	<table class="table table-hover" style="width: 50%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Device Type</th>
				<th>Device Price</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($dataArray as $key => $value) {
			?>
			<tr>
				<td><?php echo $value['id']; ?></td>
				<td><?php echo $value['device_type']; ?></td>
				<td><?php echo $value['device_price']; ?></td>
			</tr>
			<?php	
			}
			?>
			
		</tbody>
	</table>
</body>
</html>