<?php
	include('header.php');

	$selectquery = "select * from Registration_page";
	$result = $mysqli->query($selectquery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
?>
<h3>Account List</h3>
<table class="table table-hover" style="width: 80%">
	<thead>
		<tr>
			<th>Id</th>
			<th>name</th>
			<th>phone</th>
			<th>email</th>
			<th>address </th>
			<th>password</th>
			<th>confirmed_password</th>
			<th>created_at</th>
			<th>Action</th>

		</tr>

	</thead>
	<tbody>
		
		<?php

		foreach ($dataArray as $key => $value) {

		?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['name']; ?></td>
			<td><?php echo $value['phone_no']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['address']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td><?php echo $value['confirmed_password']; ?></td>
			<td><?php echo $value['created_at']; ?></td>
			<td><?php echo $value['Action']; ?></td>

			<th><a class="btn btn-outline-danger">  delete </a></th> <th><a class="btn btn-primary"> Edit </a></th> 
			
		</tr>

		<?php	
		}
		?>

		<tr>
			<th> <?php echo "total"; ?> </th>
			<th> <?php echo count($dataArray); ?> </th>
			
		</tr>
	</tbody>
</table>
